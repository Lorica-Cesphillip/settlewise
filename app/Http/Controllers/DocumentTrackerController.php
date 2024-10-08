<?php

namespace App\Http\Controllers;

use App\Models\DocumentRequest;
use Illuminate\Http\Request;
use App\Models\DocumentTracker;
use Illuminate\Auth\Access\Response;
use Illuminate\Cache\RedisTagSet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DocumentTrackerController extends Controller
{
    //
    public function index(){
        $documents = DocumentTracker::latest()->paginate(10);

        return view('documents.dashboard');
    }

    public function create(){
        return view('documents.forms.document_tracker_request');
    }

    /**
     * @param \Illuminate\Http\Request $document
     * @return
     */
    public function store(Request $document, Request $documentRequest): RedirectResponse{
        $document->validate([
            'receipient_name' => 'required|string|max:255',
            'document_type' => 'required|string|max:50',
            'others' => 'string|max:140',
            'subject' => 'required|string|max:140',
        ]);

        $documentRequest->validate([
            'request_type' => 'required|string|max:140',
            'others' => 'string|max:140',
            'document_requested/details' => 'required|string|max:140',
            'request_purpose' => 'string|max:140'
        ]);

        DocumentTracker::create($document->all());
        DocumentRequest::create($documentRequest->all());

        return redirect(route('documents.outgoing'));
    }
}
