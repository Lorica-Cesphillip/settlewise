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
            $incoming_documents = DocumentTracker::with(['from_employee', 'to_employee', 'request', 'referral', 'document_type', 'status'])->where('is_forwarded', '=', 0)->latest()
                ->paginate(10);

            // For Referral Form
            $employees = User::select(DB::raw("CONCAT(fname, ' ', mname, ' ', lname) AS full_name"))->get();

            return view('documents.incoming', compact('incoming_documents', 'employees'));
        } else {
            $incoming_documents = DocumentTracker::with(['from_employee', 'to_employee', 'request', 'referral', 'document_type', 'status'])
                ->latest()
                ->where('to_employee_id', '=', Auth::user()->employee_number)->where('is_forwarded', '=', 1)
                ->paginate(10);

            return view('documents.incoming', compact('incoming_documents'));
        }
    }

    /**
     * This is intended for the acceptance/rejection of request
     */
    public function update(Request $request, $request_id, $tracking_code)
    {
        $request->validate([
            'granted' => 'required|boolean',
            'request_comments' => 'required|string|baetween: 1,140',
            'rejection_reason' => 'required|string|not_in:--Select reason of rejection--'
        ]);
        if($request->granted){
            DocumentRequest::where('request_id', $request_id)->insert(['comments_if_granted' => $request->request_comments]);
            DocumentTracker::where('document_tracking_code', '=', $tracking_code)->update(['document_status_id' => 2]);

            return redirect()->route('incoming.index')->with('success');
        }else{
            DocumentRequest::where('request_id', $request_id)->insert(['rejection_reason' => $request->rejection_reason]);
            DocumentTracker::where('document_tracking_code', '=', $tracking_code)->update(['document_status_id' => 3]);

            return redirect()->route('incoming.index')->with('success');
        }
    }

    public function store(Request $request, $tracking_code)
    {
        $request->validate([
            'what' => 'required|string|max:140',
            'where' => 'required|string|max:140',
            'who' => 'required|string|max:140',
            'when' => 'required|date'
        ]);


    }
}
