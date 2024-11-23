<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentTracker;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\DocumentReferral;

class IncomingDocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incoming_documents = DocumentTracker::latest()
            ->with('to_employee_id')
            ->with('request')
            ->with('referral')
            ->with('document_type')
            ->with('from_employee_id')
            ->paginate(10);
        /**
         * For Referral Modal.
         */
        $employees = User::select(DB::raw("CONCAT(fname, ' ', mname, ' ', lname) AS full_name"))->get();

        return view('documents.incoming', compact('incoming_documents', 'employees'));
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
        $request->validate([
            'employee_number' => 'required|integer',
            'for' => 'required|string|max:140',
            'for_urgent' => 'boolean',
            'please' => 'required|string|max:140',
            'plase_urgent' => 'boolean',
            'remarks' => 'string|max:140',
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

    /**
     * Display the specified resource. Must Return a json Array.
     */
    public function show(string $id)
    {
        //
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
