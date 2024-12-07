<?php

namespace App\Http\Controllers;


use App\Models\Divisions;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DivisionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $divisions = Divisions::all();
            $employees = User::select(DB::raw("CONCAT(fname, ' ', mname, ' ', lname) AS full_name"))->get();

            return view('documents.aphso-divisions', compact('divisions', 'employees'));
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error rendering the documents.aphso-divisions view.', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            abort(500, 'An error occurred while loading the page.');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'division_name' => 'required|string|max:255',
                'division_abbreviation' => 'required|string|max:255',
                'division_head' => 'nullable', // Adjust validation based on your needs
            ]);

            // Create a new division record in the database
            Divisions::create([
                'name' => $request->division_name,
                'abbreviation' => $request->division_abbreviation,
                'head' => $request->division_head
            ]);

            // Redirect back with a success message
            return redirect()->route('divisions.index')->with('success', 'Division created successfully.');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error storing a new division.', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            abort(500, 'An error occurred while storing the division.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $division = Divisions::where('division_id', '=', $id);
            if ($division) {
                return response()->json(['division' => $division], 200);
            }
        } catch (\Exception $e) {
            // Log the error to the default log channel
            Log::error('Error fetching division with ID: ' . $id, [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            abort(500, 'An error occurred while fetching the division.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'division_name' => 'required|string|max:255',
            'division_abbreviation' => 'required|string|max:255',
            'division_head' => 'nullable', // Adjust validation based on your needs
        ]);

        Divisions::where('division_id', '=', $id)->update($request->all());

        return response()->json('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
