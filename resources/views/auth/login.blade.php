<x-login>
    <x-guest-layout>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="employee_id" :value="__('Employee ID:')" />
                <x-text-input id="employee_id" class="block w-full"
                    type="text"
                    name="employee_id"
                    :value="old('employee_id')"
                    autofocus autocomplete="on" />
                <x-input-error :messages="$errors->get('employee_id')" class="mt-1" />
            </div>

            <!-- Password -->
            <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full"
                type="password"
                name="password"
                    autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-1" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <x-primary-button class="ms-3">
                    <x-slot name="name">Log In</x-slot>
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>
</x-login>
