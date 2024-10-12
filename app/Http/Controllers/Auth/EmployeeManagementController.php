<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Divisions;
use App\Models\Employees;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;

class EmployeeManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $aphso_employees = Employees::all()->paginate(10);

        return view('documents.employees', compact('aphso_employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('documents.forms.register_employee');
    }

    /**
     * Handle an incoming employee registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'division_id' => ['required', 'integer', 'max:1'],
            'lname' => 'required|string|max:50',
            'fname' => 'required|string|max:50',
            'mname' => 'required|string|max:50',
            'address' => 'required|string|max:140',
            'birthday' => 'required|date',
            'martial_status' => 'required|string|max:20',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Employees::class],
            'contact_nos' => ['required', 'string', 'max:12'],
            'aphso_division' => ['required', 'string', 'max:100'],
            'position' => ['required', 'string', 'max:255'],
            'employee_image' => [, 'image']
        ]);

        $user = User::create($request->all());

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('documents.employees', absolute: false));
    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeeManagementController $employeeManagementController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeManagementController $employeeManagementController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmployeeManagementController $employeeManagementController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeManagementController $employeeManagementController)
    {
        //
    }
}
