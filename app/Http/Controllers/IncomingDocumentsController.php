<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentTracker;
use App\Models\Employees;
use Illuminate\Support\Facades\DB;

class IncomingDocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Employees $employee_id)
    {
        $documents = DocumentTracker::latest()->where('from_employee_id', '=', $employee_id)->paginate(10);
        $employees = Employees::select(DB::raw("CONCAT(fname, ' ', mname, ' ', lname) AS full_name"))->get();

        return view('documents.outgoing', compact('documents', 'employees'));
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
    public function store(Request $request)
    {
        //
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
