<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
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

    public function verifyOtp(OTPVerification $request): RedirectResponse{

        $request->verify();
        $request->session()->regenerate();
        $incoming_documents = \App\Models\DocumentTracker::with(['document_type', 'from_employee'])
        ->where('to_employee_id', Auth::user()->employee_number)
        ->latest()
        ->take(4)
        ->get();

        return redirect()->route('dashboard')->with('incoming_documents', $incoming_documents);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        //Will be relocated to the otp verification, if the application has thoroughly tested.
        $request->session()->regenerate();
        $incoming_documents = \App\Models\DocumentTracker::with(['document_type', 'from_employee'])->where('to_employee_id', '=', Auth::user()->employee_number)->latest()->take(4)->get();
        Log::info('Data: ', $incoming_documents->toArray());
        return redirect()->route('dashboard')->with('incoming_documents', $incoming_documents);
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
