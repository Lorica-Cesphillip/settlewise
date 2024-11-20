<?php

namespace App\Http\Controllers;

use App\Models\DocumentReferral;
use App\Models\DocumentRequest;
use Illuminate\Http\Request;
use App\Models\DocumentTracker;
use App\Models\Employees;
use App\Models\DocumentType;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OutgoingDocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Employees $employee_id)
    {
        $outgoing_documents = DocumentTracker::latest()->where('from_employee_id', '=', $employee_id)->paginate(10);
        $employees = Employees::select(DB::raw("CONCAT(fname, ' ', mname, ' ', lname) AS full_name"))->get();
        $document_type = DocumentType::all();

        return view('documents.outgoing', compact('outgoing_documents', 'employees', 'document_type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getDivision(Request $request)
    {
        $fullName = $request->query('full_name');

        $employee = Employees::where(DB::raw("CONCAT(fname, ' ', mname, ' ', lname)"), $fullName)->with('divisions')->first();

        if ($employee) {
            return response()->json(['division_name' => $employee->divisions->division_name]);
        }

        return response()->json(['division_name' => null], 404);
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
     * @param \Illuminate\Http\Request $document
     * @return
     */
    public function store(Request $document): RedirectResponse
    {
        $validatedData = $document->validate([
            'recipient_name' => 'required|not_in:--Please Select Recipient--',
            'document_type' => 'required|not_in:--Please Select Document Type--',
            'urgent' => 'required|boolean',
            'confidential' => 'required|boolean',
            'others' => 'string|max:140',
            'subject' => 'required|string|max:140',
            'document' => 'required|mimes:docx,doc,pdf,xlsx,xls,ppt,pptx|max:10mb'
        ]);
        //Before executing this line, the recipient_name must first be changed into a to_emp_id.
        $name = explode(' ', $validatedData['recipient_name']);

        $lname = array_pop($name);
        $mname = count($name) > 1 ? array_pop($name) : null;
        $fname = implode(' ', $name);

        $employee_id = Employees::where('first_name','=', $fname)
                        ->where('last_name', '=', $lname)
                        ->where(function ($query) use ($mname) {
                            if ($mname) {
                                $query->where('middle_name', '=', $mname);
                            } else {
                                $query->whereNull('middle_name');
                            }
                        })
                        ->first();
        $validatedData['to_employee_id'] = $employee_id->employee_number;
        unset($validatedData['recipient_name']);

        DocumentTracker::create($validatedData);

        //If the employee deicdes that he goes to send a request form, the foreign key must be generated first.
        if ($document->boolean('requested')) {
            $document->validate([
                'request_type' => 'required|string|max:140',
                'others' => 'string|max:140',
                'requested_document' => 'string|max:140',
                'request_purpose' => 'string|max:140',
                'request_details' => 'string|max:140',
            ]);
            DocumentRequest::create($document->only('request_type', 'others', 'document_requested', 'request_purpose', 'request_details'));
        }
        return redirect(route('outgoing.index'))->with('status', 'success');
    }

    /**
     * Must return a json array
     */
    public function show(string $id)
    {
        //
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
    }

    public function storeReferralResponse(Request $response){
        $response->validate(['employee_remarks' => 'reqired|string|max:140']);
        DocumentReferral::create($response->all());

        return redirect(route('incoming'))->with('success');
    }

    public function storeApproval(Request $response){
        $response->validate(['approved_by_head' => 'reqired|boolean']);
        DocumentReferral::create($response->all());

        return redirect(route('incoming'))->with('success');
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
