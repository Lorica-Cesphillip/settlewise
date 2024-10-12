
    <x-guest-layout>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="lname" :value="__('Last Name')" />
                <x-text-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('name')"/>
                <x-input-error :messages="$errors->get('lname')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="fname" :value="__('First Name')" />
                <x-text-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')"/>
                <x-input-error :messages="$errors->get('fname')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="mname" :value="__('Middle Name')" />
                <x-text-input id="mname" class="block mt-1 w-full" type="text" name="mname" :value="old('mname')"/>
                <x-input-error :messages="$errors->get('mname')" class="mt-2" />
            </div>

            <!-- Address -->
            <div>
                <x-input-label for="address" :value="__('Home Address')" />
                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"/>
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- Birthday -->
            <div>
                <x-input-label for="birthdate" :value="__('Birthday')" />
                <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')"/>
                <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
            </div>

            <!-- Marital Status -->
            <div>
                <x-input-label for="address" :value="__('Marital Status')" />
                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"/>
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Contact Number -->
            <div class="mt-4">
                <x-input-label for="contact_nos" :value="__('Contact Number')" />
                <x-text-input id="contact_nos" class="block mt-1 w-full" type="text" name="contact_nos" :value="old('contact_nos')"/>
                <x-input-error :messages="$errors->get('contact_nos')" class="mt-2" />
            </div>

            <!-- APHSO Division-->
            <div>
                <x-form-dropdown for="division" :value="__('APHSO Division')" />
                <select id="division" class="block mt-1 w-full" type="text" name="division" :value="old('division')">
                <option value = "" disabled selected>Select Division</option>

                @foreach ($divisions as $division)
                    <option value = "{{$division->division_id}}">{{$division->division_name}}
                        Division
                    </option>
                @endforeach
                <x-form-dropdown :messages="$errors->get('division')" class="mt-2" />
            </div>

            <!-- Position -->
            <div>
                <x-input-label for="position" :value="__('Position')" />
                <x-text-input id="position" class="block mt-1 w-full" type="text" name="position" :value="old('position')"/>
                <x-input-error :messages="$errors->get('position')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>
