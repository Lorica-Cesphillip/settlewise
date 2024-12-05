<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentTracker;
use App\Models\User;
use App\Models\DocumentRequest;
use Illuminate\Support\Facades\DB;
use App\Models\DocumentReferral;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Node\Block\Document;
use Illuminate\Support\Facades\Log;


class IncomingDocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->divisions->abbreviation == 'HEAD') {
            $incoming_documents = DocumentTracker::with(['from_employee', 'to_employee', 'request', 'referral', 'document_type', 'status'])->latest()
                ->paginate(10);

            // For Referral Form
            $employees = User::select(DB::raw("CONCAT(fname, ' ', mname, ' ', lname) AS full_name"))->get();

            return view('documents.incoming', compact('incoming_documents', 'employees'));
        } else {
            $incoming_documents = DocumentTracker::with(['from_employee', 'to_employee', 'request', 'referral', 'document_type', 'status'])
                ->latest()
                ->where('to_employee_id', '=', Auth::user()->employee_number)
                ->paginate(10);

            return view('documents.incoming', compact('incoming_documents'));
        }
    }

    /**
     * This is intended for the acceptance/rejection of request
     */
    public function update(Request $request, DocumentTracker $document_tracking_code, $id)
    {
        $request->validate([
            'granted' => 'required|boolean',
            'request_comments' => 'string|max:140|min:1',
            'rejection_reason' => 'string|not_in:--Select reason of rejection--'
        ]);
        if($request->granted){
            DocumentRequest::where('request_id', $id)->insert(['comments_if_granted' => $request->request_comments]);
            $document_tracking_code->update(['document_status_id' => 2]);
            $document_tracking_code->save();

            return redirect()->route('incoming.index')->with('success');
        }else{
            DocumentRequest::where('request_id', $id)->insert(['rejection_reason' => $request->rejection_reason]);
            $document_tracking_code->update(['document_status_id' => 3]);
            $document_tracking_code->save();

            return redirect()->route('incoming.index')->with('success');
        }
    }
}
