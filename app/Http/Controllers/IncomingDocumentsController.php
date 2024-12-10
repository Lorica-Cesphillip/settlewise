<?php

namespace App\Http\Controllers;

use App\Models\Announcements;
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
        Log::info('Passed Data: ', [$request_id, $tracking_code]);
        $tracking_code = ltrim($tracking_code, "0");
        Log::info('New Data: ', [$request_id, $tracking_code]);
        $request->validate(['granted' => 'required|boolean']);

        Log::info('Verified Data: ', $request->all());

        try{
            if($request->granted){
                $request->validate(['request_comments' => 'required|string|between: 1,140']);
                DocumentRequest::where('request_id', $request_id)->update(['comments_if_granted' => $request->request_comments]);
                DocumentRequest::where('request_id', '=', $request_id);
                DocumentTracker::where('document_tracking_code', '=', $tracking_code)->update(['status_id' => 2]);

                return response()->json('success', 200);
            }else{
                $request->validate(['rejection_reason' => 'required|string|not_in:--Select reason of rejection--']);
                DocumentRequest::where('request_id', $request_id)->update(['rejection_reason' => $request->rejection_reason]);
                DocumentTracker::where('document_tracking_code', '=', $tracking_code)->update(['status_id' => 3]);

                return response()->json('success', 200);
            }
        }
        catch(\Error $e){
            Log::error($e->getMessage());
            return response()->json('error', 500);
        }
    }

    public function store(Request $request, $tracking_code)
    {
        $request->validate([
            'what' => 'required|string|max:140',
            'where' => 'required|string|max:140',
            'who' => 'required|string|max:140',
            'when' => 'required|date',
            'notes' => 'string|max:140|nullable'
        ]);

        $document = DocumentTracker::select('document_tracking_code')->where('document_tracking_code', '=', $tracking_code);

        Announcements::insert([
            'document_tracking_code' => $document->document_tracking_code,
            'what' => $request->what,
            'where' => $request->where,
            'who' => $request->who,
            'when' => $request->when,
            'notes' => $request->notes,
            'is_posted' => 1
        ]);

        return response()->json('success', 200);
    }
}
