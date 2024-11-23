<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Divisions;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class EmployeeManagementController extends Controller
{
    protected static ?string $password;
    /**
     * Display a listing of the resource.
     * Note from the Developer: Only the Head of the Albay Provincial Human Settlement Office will manage the data for their employee, the rest will only view the employee status.
     */
    public function index()
    {
        //
        $aphso_employees = User::with('divisions')->paginate(10);
        $divisions = Divisions::all();

        return view('documents.employees', compact('aphso_employees', 'divisions'));
    }


    /**
     * Handle an incoming employee registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        //Refer to the column names on the table.
        $employee_validated = $request->validate([
            'division_name' => 'required|string|max:140',
            'last_name' => 'required|string|max:50',
            'first_name' => 'required|string|max:50',
            'middle_name' => 'required|string|max:50',
            'address' => 'required|string|max:140',
            'birthdate' => 'required|date',
            'martial_status' => 'required|string|max:20',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'contact_nos' => 'required|string|max:12',
            'position' => 'required|string|max:255',
            'employee_image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $defaultImage_path = 'images/default-profile.png';

        //Retrieve the foreign key first, as the department head will assign the employee to a spcific division.
        $division_id = Divisions::where('division_name', '=', $employee_validated['division_name'])->first();
        $employee_validated['division_id'] = $division_id->division_id;
        unset($employee_validated['division_name']);

        if($request->hasFile('employee_image')){
            $imageName = time().'.'.$request->employee_image->extension();
            $request->employee_image->move(public_path('images'), $imageName);
            $imagePath = 'images/'.$imageName;
        }else{
            $imagePath = $defaultImage_path;
        }
        $initial_password = \Illuminate\Support\Facades\Hash::make($employee_validated['last_name'].$employee_validated['aphso'].$employee_validated['birthdate']);
        User::create(array_merge($request->all(), ['employee_image' => $imagePath], ['emp_status' => 1]));

        return redirect(route('documents.employees', absolute: false))->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show($employeeNumber)
    {
        Log::info("Fetching employee with employee number: {$employeeNumber}");

        $employee = User::where('employee_number', '=', $employeeNumber)
            ->with('divisions')
            ->first();

        if ($employee) {
            return response()->json($employee);
        } else {
            return response()->json(['error' => 'Employee not found'], 404);
        }
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $employees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $employees)
    {
        //
    }

    /**
     * The head requested us if instead of deleting employee information, we will instead archive the data, in which it will be automatically deleted from the system for a certain time * period depending on what the head decides.
     */
    public function archive(EmployeeManagementController $employeeManagementController)
    {
        //
    }
}
