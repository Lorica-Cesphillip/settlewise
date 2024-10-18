<x-login>
    <x-guest-layout>
        <div class="w-[523px] h-[126px] relative">
            <div class="w-[523px] h-[57px] left-0 top-0 absolute text-center"><span style="text-black text-base font-normal  leading-loose">Welcome to<br/></span><span style="text-black text-xl font-bold  leading-10">SETTLEWISE: A DOCUMENT MANAGEMENT SYSTEM</span></div>
            <div class="w-[443px] h-[57px] left-[61px] top-[69px] absolute text-black text-base font-normal  leading-tight">An OTP number has been sent to your phone number. Input the 6-digit number that you received.</div>
        </div>
        <form method="POST" action="{{ route('otp_verification') }}">
            @csrf

            <!-- OTP Number -->
            <div>
                <x-input-label for="otp_no" :value="__('Name')" />
                <x-text-input id="otp_no" class="block mt-1 w-full" type="text" name="otp_no" :value="old('otp_no')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('otp_no')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4">
                    {{ __('Verify OTP') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>

</x-login>
