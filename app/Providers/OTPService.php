<?php

namespace App\Services;

use Twilio\Rest\Client;
use Illuminate\Support\Facades\Cache;

class OTPService
{
    protected $twilioClient;

    public function __construct()
    {
        // Initialize the Twilio client with credentials from the .env file
        $this->twilioClient = new Client(config('services.twilio.sid'), config('services.twilio.token'));
    }

    /**
     * Generate and send OTP to a given phone number.
     *
     * @param string $phoneNumber
     * @return string The OTP generated
     */
    public function sendOTP(string $phoneNumber): string
    {
        // Generate a 6-digit OTP
        $otp = $this->generateOTP();

        // Store OTP in cache for 5 minutes, associating it with the phone number
        Cache::put("otp_{$phoneNumber}", $otp, now()->addMinutes(5));

        // Send OTP via SMS using Twilio
        $this->sendSMS($phoneNumber, $otp);

        return $otp;
    }

    /**
     * Generate a random 6-digit OTP.
     *
     * @return string
     */
    private function generateOTP(): string
    {
        return str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT); // Ensures a 6-digit OTP
    }

    /**
     * Send SMS containing the OTP
     *
     * @param string $phoneNumber
     * @param string $otp
     * @return void
     */
    private function sendSMS(string $phoneNumber, string $otp): void
    {
        $message = "Your OTP is: {$otp}";

        $this->twilioClient->messages->create($phoneNumber, [
            'from' => config('services.twilio.from'),
            'body' => $message
        ]);
    }

    /**
     * Verify the provided OTP against the cached OTP.
     *
     * @param string $phoneNumber
     * @param string $otp
     * @return bool
     */
    public function verifyOTP(string $phoneNumber, string $otp): bool
    {
        $cachedOtp = Cache::get("otp_{$phoneNumber}");

        if ($cachedOtp && $cachedOtp == $otp) {
            Cache::forget("otp_{$phoneNumber}"); // Clear OTP after successful verification
            return true;
        }

        return false;
    }
}
