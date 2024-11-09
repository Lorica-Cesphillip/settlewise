<?php

namespace App\Http\Controllers;

use App\Models\DocumentReferral;
use App\Models\DocumentRequest;
use Illuminate\Http\Request;
use App\Models\DocumentTracker;
use App\Models\Employees;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class DocumentTrackerController extends Controller
{
    //

    /**
     * Begin Controller of Sending Documents.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(){
        return view('documents.forms.document_tracker_request');
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
