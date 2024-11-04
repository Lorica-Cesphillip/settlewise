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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class OutgoingDocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Employees $employee_id)
    {
        $documents = DocumentTracker::latest()->where('from_employee_id', '=', $employee_id)->paginate(10);
        $employees = Employees::select(DB::raw("CONCAT(fname, ' ', mname, ' ', lname) AS full_name"))->get();
        $document_type = DocumentType::all();

        return view('documents.outgoing', compact('documents', 'employees', 'document_type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
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
