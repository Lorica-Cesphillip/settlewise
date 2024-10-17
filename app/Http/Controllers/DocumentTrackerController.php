<?php

namespace App\Http\Controllers;

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
        $documents = DocumentTracker::latest()->paginate(10);

     return view('documents.incoming');
    }

    public function outgoing($employee_id){
        $documents = DocumentTracker::latest()->paginate(10);

        return view('documents.outgoing');
    }

    public function archived($employee_id){
        $archived = DocumentTracker::latest()->paginate(10);
        return view('documents.archived');
    }

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
        return redirect(route('documents.outgoing'))->with('success', 'Document Sent to its intended receipient.');
    }
}
