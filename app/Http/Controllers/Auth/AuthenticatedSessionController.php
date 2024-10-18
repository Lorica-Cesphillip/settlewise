<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\OTPVerification;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    public function otp_page(): View{
        return view('auth.otp');
    }

    public function verifyOtp(OTPVerification $verify): RedirectResponse{

        $verify->verify();

        return redirect(route('dashboard'));
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        $employee = DB::table('aphso_employees')
            ->select(DB::raw("CONCAT(fname, ' ', IFNULL(mname, ''), ' ', lname) AS full_name"), 'aphso_division.division_name')
            ->join('aphso_division', 'aphso_employees.division_id', '=', 'aphso_division.division_id')
            ->where('aphso_employees.employee_number', '=', Auth::user()->employee_number)
            ->first();

        session(['employee' => $employee]);

        return redirect(route('otp'));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
