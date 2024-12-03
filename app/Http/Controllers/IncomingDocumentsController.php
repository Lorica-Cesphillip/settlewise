<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentTracker;
use App\Models\User;
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Forward Referral to another employee.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource. Must Return a json Array.
     */
    public function show($trackingCode)
    {
        $document = DocumentTracker::with(['from_employee', 'to_employee', 'request', 'referral', 'document_type', 'status'])
        ->where('document_tracking_code', '=', $trackingCode)
        ->first();
        Log::info( $document);

        if($document){return response()->json($document);}
        else{ return response()->json(['error' => 'This document does not exist in database.'], 404);}
    }

    /**
     * Show the form for editing the specified resource. Use the json Array.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Archived the document, to safeguard its contents.
     */
    public function destroy(string $id)
    {
        //
    }
}
