<?php

namespace App\Http\Controllers;

use App\Models\DocumentReferral;
use App\Models\DocumentRequest;
use Illuminate\Http\Request;
use App\Models\DocumentTracker;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DocumentTrackerController extends Controller
{
    //
    public function incoming($employee_id){
        $documents = DocumentTracker::latest()->where('to_employee_id', '=', $employee_id)->paginate(10);

     return view('documents.incoming', compact('documents'));
    }

    public function outgoing($employee_id){
        $documents = DocumentTracker::latest()->where('from_employee_id', '=', $employee_id)->paginate(10);

        return view('documents.outgoing');
    }

    public function archived($employee_id){
        $archived = DocumentTracker::latest()->paginate(10);
        return view('documents.archived');
    }

    /**
     * Begin Controller of Sending Documents.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(){
        return view('documents.forms.document_tracker_request');
    }

    /**
     * @param \Illuminate\Http\Request $document
     * @return
    */
    public function store(Request $document): RedirectResponse{
        $document->validate([
            'receipient_name' => 'required|string|max:255',
            'document_type' => 'required|string|max:50',
            'others' => 'string|max:140',
            'subject' => 'required|string|max:140',
        ]);
        DocumentTracker::create($document->only(
            'recipient_name', 'document_type', 'others', 'subject'
        ));

        if($document->boolean('requested'))
        {
            $document->validate([
            'request_type' => 'required|string|max:140',
            'others' => 'string|max:140',
            'document_requested.details' => 'required|string|max:140',
            'request_purpose' => 'string|max:140'
            ]);
            DocumentRequest::create($document->only(
                'request_type', 'others', 'document_requested.details', 'request_purpose'
                ));
        }
        return redirect(route('documents.outgoing'))->with('success');
    }
    /*End Controllers for Sending Documents. */

    /**
     * Begin Controller for Incoming Documents.
     */

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
        $request->validate([
            'employee_number' => 'required|integer',
            'for' => 'required|string|max:140',
            'for_urgent' => 'required|boolean',
            'please' => 'required|string|max:140',
            'plase_urgent' => 'required|boolean',
            'remarks' => 'required|string|max:140',
        ]);

        DocumentReferral::create($request->only([
            'employee_number',
            'for',
            'for_urgent',
            'please',
            'plase_urgent',
            'remarks'
        ]));

        return redirect(route('outgoing'))->with('success');
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
    /*End here for Incoming Documents. */

        /**
     * Summary of show (for Incoming and Outgoing Document Depending )
     * @param string $document_tracking_code
     */
    public function showDocument(DocumentTracker $document_tracking_code){
        return view('modals.view-document', compact('document_tracking_code'));
    }

    public function createReferral(DocumentTracker $documentTracker){
        return view('modals.document-referral', compact('document_tracking_code'));
    }
}
