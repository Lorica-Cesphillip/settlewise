<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OTPVerification extends FormRequest
{
    protected $otpService;


    //public function __construct(OTPService $otp){
    //    $this->otpService = $otp;
    //}
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "otp_no" => ['required', 'max:6', 'integer']
        ];
    }
    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function verify(): bool
    {
        $phone = $this->input('phone_number');
        $otp = $this->input('otp_no');

        return $this->otpService->verifyOTP($phone, $otp);
    }
}
