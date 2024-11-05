<?php

namespace App\Http\Controllers;


use App\Models\Divisions;
use Illuminate\Http\Request;

class DivisionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Summary of showForm
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showForm(){
        $divisions = Divisions::all();

        return view('forms.add-employee', compact('divisions'));
    }
    public function index()
    {
        $divisions = Divisions::all();

        return view('documents.aphso-divisions', compact('divisions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the incoming data
    $validatedData = $request->validate([
        'division_name' => 'required|string|max:255',
        'division_abbreviation' => 'required|string|max:255',
        'division_head' => 'required|string|max:255',
    ]);

    // Create a new division record in the database
    Divisions::create([
        'name' => $validatedData['division_name'],
        'abbreviation' => $validatedData['division_abbreviation'],
        'head' => $validatedData['division_head'],
    ]);

    // Redirect back with a success message
    return redirect()->route('divisions.index')->with('success', 'Division created successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
