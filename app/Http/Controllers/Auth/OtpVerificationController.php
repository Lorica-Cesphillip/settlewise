<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\OTPVerification;
use Illuminate\Http\Request;

class OtpVerificationController extends Controller
{
    public function store(OTPVerification $request){
        $request->verify();
        $request->session()->regenerate();

    }
}
