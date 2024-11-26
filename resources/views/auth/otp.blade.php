<x-login>
    <x-guest-layout>
        <div class=" h-11 relative">
            <div class="w-[443px] h-[57px] absolute text-black text-base font-normal leading-tight">An OTP number has been sent to your phone number. Input the 6-digit number that you received.</div>
        </div>
        <form method="POST" action="{{ route('otp_verification') }}">
            @csrf

            <!-- OTP Number -->
            <div>
                <x-input-label for="otp_no" :value="__('Enter Your OTP Number')" />
                <x-text-input id="otp_no" class="block mt-1 w-full" type="text" name="otp_no" autofocus autocomplete="off" />
                <x-input-error :messages="$errors->get('otp_no')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4">
                    <x-slot name="name">Verify</x-slot>
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>

</x-login>
