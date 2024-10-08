<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
    public function show(): View
    {
        return view('auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        $employeeId = $request->input('employee_id');
        $password = $request->input('password');

        $temp = explode('-', $employeeId);
        if(count($temp) != 2){
            throw ValidationException::withMessages([
                'employee_id' => _('You entered the wrong employee Id. Please Try Again.')
            ]);
        }

        $aphso_division = $temp[0];
        $emp_no = $temp[1];

        $aphso_division = DB::table('aphso_division')->where('division_name', $aphso_division)->first();
        if(!$aphso_division){
            throw ValidationException::withMessages([
                'employee_id' => _('The Divison you entered is invalid. Please Try Again.')
            ]);
        }

        $employee = DB::table('aphso_employees')
            ->where('employee_number', $emp_no)
            ->where('division_id')
            ->first();
        if(!$employee){
            throw ValidationException::withMessages([
                'employee_id' => _('Employee number is invalid. Please Try Again.')
            ]);
        }

        $credentials = [
            'employee_id' => $employeeId,
            'password' => $password
        ];

        if(!Auth::guard('web')->attempt($credentials)){
            throw ValidationException::withMessages([
                'password' => ('auth.password'),
                'employee_id' => _('Wrong Employee Id and/or Password. Please Try Again.')
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(route('documents.dashboard', absolute: false));
    }
}
