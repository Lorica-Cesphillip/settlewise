<?php

namespace App\Http\Controllers;

use App\Models\DocumentReferral;
use App\Models\DocumentRequest;
use Illuminate\Http\Request;
use App\Models\DocumentTracker;
use App\Models\User;
use App\Models\DocumentType;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class OutgoingDocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outgoing_documents = DocumentTracker::with(['to_employee', 'request', 'referral', 'document_type', 'status'])->where('from_employee_id', '=', Auth::user()->employee_number)->latest()->paginate(10);
        $employees = User::select(DB::raw("CONCAT(fname, ' ', mname, ' ', lname) AS full_name"))->where('employee_number', '!=', Auth::user()->employee_number)->where('emp_status', '=', 1)->get();
        $document_type = DocumentType::all();

        return view('documents.outgoing', compact('outgoing_documents', 'employees', 'document_type'));
    }

    /**
     * This is intended for the automatic show of employee division when the user selects an employee.
     */
    public function getDivision($full_name)
    {
        if($full_name == '--Please Select Recipient--' || $full_name == '--APHSO Employee--'){
            Log::info('This is an empty response');
            return response()->json(['division_name' => ' ']);
        }else{
            $employee = User::where(DB::raw("CONCAT(fname, ' ', mname, ' ', lname)"), $full_name)
            ->with('divisions')
            ->first();
            Log::info($employee);
            if ($employee) {
            return response()->json(['division_name' => $employee->divisions->division_name.' Division']);
            }

            return response()->json(['division_name' => null], 404);
        }
    }

    /**
     * Send the Document to its intended recipient. Note that the from_employee_id will came from the user that is registed in the application.
     */
    /**
     * @param \Illuminate\Http\Request $request
     * @return
     */
    public function store(Request $request)
    {
        $request->validate([
            'recipient_name' => 'required|not_in:--Please Select Recipient--',
            'document_type' => 'required|not_in:--Please Select a Document Type--',
            'urgent' => 'required|boolean',
            'confidential' => 'required|boolean',
            'others' => 'string|max:140',
            'subject' => 'required|string|max:140',
            'remarks' => 'nullable|string|max:140',
            'document' => 'required|mimes:docx,doc,pdf,xlsx,xls,ppt,pptx|max:10000'
        ]);

        try {
            // Parse recipient name
            $fullName = trim($request->recipient_name);
            $nameParts = preg_split('/\s+/', $fullName);

            // Handle name parts
            $lname = array_pop($nameParts); // Last part is the last name
            $fname = implode(' ', $nameParts); // Everything else is the first name

            Log::info("Parsed name: Last Name - $lname, First Name - $fname");

            // Lookup employee
            $to_employee = User::select('employee_number', 'emp_status')
                ->where('fname', '=', $fname)
                ->where('lname', '=', $lname)
                ->first();

            Log::info('Recipient Lookup:', [$to_employee]);

            if (!$to_employee) {
                return response()->json([
                    'errors' => ['recipient' => 'Employee does not exist or name is incorrect.'],
                ], 422);
            }
            else if($to_employee->emp_status == 0){
                Log::info('Employee Offline');
                return response()->json([
                    'errors' => ['inactive' => 'Employee is not part of the organization.'],
                ], 422);
            }
            $to_employee_id = $to_employee->employee_number;
            $document_type_id = DocumentType::select('id')->where('document_type', $request->only('document_type'))->first();

            $file = $request->file('document');
            $document_type = $request->document_type;
            $date = now()->format('m-d-Y');

            $new_file = "{$document_type}-{$date}.{$file->getClientOriginalExtension()}";
            $path = $file->storeAs('document', $new_file);

            $forwarded = Auth::check() && Auth::user()->divisions->abbreviation == 'HEAD' ? 1 : 0;

            $createdRecord = DocumentTracker::create([
                'document_type_id' => $document_type_id->id,
                'others' => $request->others,
                'from_employee_id' => Auth::user()->employee_number,
                'to_employee_id' => $to_employee_id,
                'document_name' => $new_file,
                'urgent' => $request->urgent,
                'confidential' => $request->confidential,
                'subject' => $request->subject,
                'remarks' => $request->remarks,
                'status_id' => 1,
                'is_forwarded' => $forwarded,
                'is_archived' => 0,
                'file_path' => $path,
                ]);

            //If the employee deicdes that he goes to send a request form, the foreign key must be generated first.
            if ($request->input('document_type') === 'Request') {
                $request->validate([
                    'request_type' => 'required|string|max:140',
                    'others' => 'string|max:140',
                    'requested_document' => 'string|max:140',
                    'request_purpose' => 'string|max:140',
                    'request_details' => 'string|max:140',
                ]);
                $doc_request = DocumentRequest::insert($request->only('request_type', 'others', 'requested_document', 'request_purpose', 'request_details'));
                $createdRecord->update(['request_id' => $doc_request]);
            }
            return redirect()->back()->with('success', 'Document sent successfully!');
        }
        catch (\Exception $errors){
            Log::error('Unexpected Error:', ['error' => $errors->getMessage()]);

            return response()->json([
                'message' => 'An unexpected error occurred.',
                'error' => $errors->getMessage(),
            ], 500);
        }
    }

    /**
     * This will be used if the head will forward the document depending on the type: standard and referral.
     */
    public function update(Request $request)
    {
        $tracking_code = $request->input('tracking_code');
        $request->validate([
            'employee_number' => 'required|integer',
            'for' => 'required|not_in:--Select Only One--',
            'for_urgent' => 'required|boolean',
            'please' => 'required|not_in:--Select Only One--',
            'plase_urgent' => 'required|boolean',
            'remarks' => 'string|max:140|nullable',
        ]);

        Log::info('Data: '.$request->all());

        try{
            $referral = DocumentReferral::create($request->all());

            DocumentTracker::where('document_tracking_code', '=', $tracking_code)->update([
                'referral_id' => $referral->referral_id,
                'to_employee_id' => $request->employee_number,
                'from_employee_id' => Auth::user()->employee_number,
                'status_id' => 5
            ]);

            return response()->json('success', 200);
        }
        catch(\Exception $e)
        {
            Log::info('Errors: ', [$e->getMessage()]);
            return back()->withErrors('errors', 'Something went wrong while processing the documents.');
        }


    }

    /**
     * Archived the document.
     */
    public function destroy(string $id)
    {
        DocumentTracker::where('document_tracking_code', '=', $id)->update(['archived' => 1]);

        return view('documents.outgoing')->with('success');
    }
}
