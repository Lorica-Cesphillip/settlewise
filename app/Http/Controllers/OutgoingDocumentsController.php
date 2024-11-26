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
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
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
        $outgoing_documents = DocumentTracker::latest()->where('from_employee_id', '=', Auth::user()->employee_number)->paginate(10);
        $employees = User::select(DB::raw("CONCAT(fname, ' ', mname, ' ', lname) AS full_name"))->get();
        $document_type = DocumentType::all();

        return view('documents.outgoing', compact('outgoing_documents', 'employees', 'document_type'));
    }

    /**
     * This is intended for the automatic show of employee division when the user selects an employee.
     */
    public function getDivision($full_name)
    {
        if($full_name == '--Please Select Recipient--'){
            return response()->json(['division_name' => ' ']);
        }else{
            $employee = User::where(DB::raw("CONCAT(fname, ' ', mname, ' ', lname)"), $full_name)
            ->with('divisions')
            ->first();

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
     * @param \Illuminate\Http\Request $document
     * @return
     */
    public function sendDocument(Request $document): RedirectResponse
    {
        $validatedData = $document->validate([
            'recipient_name' => 'required|not_in:--Please Select Recipient--',
            'document_type' => 'required|not_in:--Please Select Document Type--',
            'urgent' => 'required|boolean',
            'confidential' => 'required|boolean',
            'others' => 'string|max:140',
            'subject' => 'required|string|max:140',
            'document' => 'required|mimes:docx,doc,pdf,xlsx,xls,ppt,pptx|max:10'
        ]);

        dd($validatedData);
        //Before executing this line, the recipient_name must first be changed into a to_emp_id.
        $name = explode(' ', $validatedData['recipient_name']);

        $lname = array_pop($name);
        $mname = count($name) > 1 ? array_pop($name) : null;
        $fname = implode(' ', $name);

        $to_employee_id = User::where('first_name','=', $fname)
                        ->where('last_name', '=', $lname)
                        ->where(function ($query) use ($mname) {
                            if ($mname) {
                                $query->where('middle_name', '=', $mname);
                            } else {
                                $query->whereNull('middle_name');
                            }
                        })
                        ->first();
        $validatedData['to_employee_id'] = $to_employee_id->employee_number;
        $validatedData['from_employee_id'] = Auth::user()->employee_number;
        unset($validatedData['recipient_name']);

        $createdRecord = DocumentTracker::create($validatedData);

        //If the employee deicdes that he goes to send a request form, the foreign key must be generated first.
        if ($document->boolean('requested')) {
            $document->validate([
                'request_type' => 'required|string|max:140',
                'others' => 'string|max:140',
                'requested_document' => 'string|max:140',
                'request_purpose' => 'string|max:140',
                'request_details' => 'string|max:140',
            ]);
            $doc_request = DocumentRequest::create($document->only('request_type', 'others', 'document_requested', 'request_purpose', 'request_details'));
            $createdRecord->update(['request_id' => $doc_request->request_id]);
        }
        return redirect(route('outgoing.index'))->with('status', 'success');
    }

    /**
     * Must return a json array. This will show the outgoing document that is either: sent, forwarded, or referred.
     */
    public function viewDocument(string $document_tracking_code)
    {
        $outgoing_document = DocumentTracker::with('to_employee')
            ->with('document_type')
            ->withExists('request')
            ->withExists('referral')
            ->findOrFail($document_tracking_code)
            ->first();
        if($outgoing_document){return response()->json(['document_information' => $outgoing_document]);}
        return response()->json(['document_information' => null]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function acceptRequest(Request $accept){
        $accept->validate([
            'granted' => 'required|boolean',
            'comments_if_granted' => 'required|string|max:140'
        ]);
        DocumentRequest::create($accept->only(['granted', 'comments_if_granted']));

        return redirect(route('incoming'))->with('success');
    }

    public function rejectRequest(Request $reject){
        $reject->validate([
            'granted' => 'required|boolean',
            'rejection_reason' => 'required|string|max:140'
        ]);

        DocumentRequest::create($reject->only('granted', 'rejection_reason'));

        return redirect(route('incoming'))->with('success');
    }

    public function storeReferral(Request $request){
        $referral = $request->validate([

        ]);
    }

    /**
     * This will be used if the head will forward the document depending on the type: standard, request, referral.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Archived the document.
     */
    public function destroy(string $id)
    {
        //
    }
}
