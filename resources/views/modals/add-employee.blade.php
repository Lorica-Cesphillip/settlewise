<x-modal name="add-new-employee" :show="false" focusable>

    <!--Close Modal-->
    <div class = "pt-10 pb-4 py-4">
        <button class = "justify-end items-end right-5"  x-on:click.prevent="$dispatch('close-modal', 'add-new-employee')">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.05086 5.63616C6.66033 5.24563 6.02717 5.24563 5.63664 5.63616C5.24612 6.02668 5.24612 6.65984 5.63664 7.05037L10.5864 12.0001L5.63664 16.9499C5.24612 17.3404 5.24612 17.9736 5.63664 18.3641C6.02717 18.7546 6.66033 18.7546 7.05086 18.3641L12.0006 13.4143L16.9504 18.3641C17.3409 18.7546 17.974 18.7546 18.3646 18.3641C18.7551 17.9736 18.7551 17.3404 18.3646 16.9499L13.4148 12.0001L18.3646 7.05037C18.7551 6.65984 18.7551 6.02668 18.3646 5.63616C17.974 5.24563 17.3409 5.24563 16.9504 5.63616L12.0006 10.5859L7.05086 5.63616Z" fill="black"/>
                </svg>
        </button>
        <div class = "relative">
            <h3 class = "text-center font-bold text-2xl">Add New Employee</h3>

            <!--Progress Bar-->
            <div class = "inline-flex p-5 justify-between">
                <div class = "rounded-full h-[60px] w-[60px] border-[#7fbaff] bg-[#7fbaff] text-center p-4">1</div>
                <div class="w-[491px] h-[18px] flex-col justify-start items-start gap-1 inline-flex">
                    <div class="h-3 pr-[489.69px] bg-[#eff1f4] rounded-[20px] justify-start items-center inline-flex absolute">
                        <div class="grow shrink basis-0 h-3 bg-white"></div>
                    </div>
                </div>
                <div class = "rounded-full h-[60px] w-[60px] border-gray-300 bg-gray-300 text-center p-4">2</div>
            </div>

            <!--Form Part 1-->
            <form action="{{route('employees.store')}}" method = "POST" class = "p-4">
                @csrf
                <h5 class = "font-bold text-xl">Part I: Personal Information</h5>
                <div class = "block">

                    <!--Employee Name-->
                    <x-input-label for="name" :value="__('Employee Name')"/>
                    <div class = "inline-flex columns-3 gap-2">
                        <div>
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')" autofocus autocomplete="off" placeholder="Last Name" />
                            <x-input-error :messages="$errors->get('lname')" class="mt-2" />
                        </div>

                        <div>
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')" autofocus autocomplete="off" placeholder="First Name" />
                            <x-input-error :messages="$errors->get('fname')" class="mt-2" />
                        </div>

                        <div>
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="mname" :value="old('mname')" autofocus autocomplete="off" placeholder="Middle Name" />
                            <x-input-error :messages="$errors->get('mname')" class="mt-2" />
                        </div>
                    </div>

                    <!--Home Address-->
                    <div class = "block">
                        <x-input-label for="address" :value="__('Home Address')"/>
                        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" autofocus autocomplete="off" placeholder="Lot/Blg. No, Street, Barangay/ Subdivision, Municipality/City, Province, ZIP Code" />
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>
                </div>

                <div class = "block columns-2">
                    <div>
                        <x-input-label for="birthday" :value="__('Birthdate')"/>
                        <x-text-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" :value="old('birthday')" autofocus autocomplete="off" placeholder="Select Employee's Birthdate" />
                        <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="marital_status" :value="__('Marital Status')"/>
                        <select id="marital_status" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="marital_status" :value="old('marital_status')" autofocus autocomplete="off">
                            <option value = "">--Select Marital Status--</option>
                            <option value = "Single">Single</option>
                            <option value = "Married">Married</option>
                            <option value = "Divorced">Divorced</option>
                            <option value = "Living Separately">Living Separately</option>
                        </select>
                        <x-input-error :messages="$errors->get('marital_status')" class="mt-2" />
                    </div>
                </div>

                <div class = "block columns-2">
                    <div>
                        <x-input-label for="email" :value="__('Employees Personal Email')"/>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autofocus autocomplete="off" placeholder="Enter Their Personal Email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="contact_nos" :value="__('Contact Number')"/>
                        <x-text-input id="contact_nos" class="block mt-1 w-full" type="text" name="contact_nos" :value="old('contact_nos')" autofocus autocomplete="off" placeholder="Enter Their Personal Contact Number" />
                        <x-input-error :messages="$errors->get('contact_nos')" class="mt-2" />
                    </div>
                </div>

                <div class = "justify-between pt-5 gap-2 inline-flex">
                    <x-tertiary-button>
                        <x-slot name="icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.05086 5.63616C6.66033 5.24563 6.02717 5.24563 5.63664 5.63616C5.24612 6.02668 5.24612 6.65984 5.63664 7.05037L10.5864 12.0001L5.63664 16.9499C5.24612 17.3404 5.24612 17.9736 5.63664 18.3641C6.02717 18.7546 6.66033 18.7546 7.05086 18.3641L12.0006 13.4143L16.9504 18.3641C17.3409 18.7546 17.974 18.7546 18.3646 18.3641C18.7551 17.9736 18.7551 17.3404 18.3646 16.9499L13.4148 12.0001L18.3646 7.05037C18.7551 6.65984 18.7551 6.02668 18.3646 5.63616C17.974 5.24563 17.3409 5.24563 16.9504 5.63616L12.0006 10.5859L7.05086 5.63616Z" fill="#04326B"/>
                            </svg>
                        </x-slot>
                        <x-slot name="name" x-on:click.prevent="$dispatch('close-modal', 'add-new-employee'">Close</x-slot>
                    </x-tertiary-button>
                    <x-next-button data="" x-on:click.prevent="$dispatch('open-modal', 'add-new-employee-2')"/>
                </div>
            </form>

            <!--Part 2: Job Position and Part 3: Profile Picture-->
            <form action="{{route('employees.store')}}" method = "POST" class = "p-4">
                <div class = "columns-2 gap-2 inline-flex">
                    <div>
                        <x-input-label for="division" :value="__('Marital Status')"/>
                        <select id="division" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="division" :value="old('division')" autofocus autocomplete="off">
                            <option value = "">--Select Division--</option>
                            @foreach($divisions as $divisions)
                            <option value = "{{$division->division_name}} Division">{{$division->division_name}} Division</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('divisions')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="contact_nos" :value="__('Contact Number')"/>
                        <x-text-input id="contact_nos" class="block mt-1 w-full" type="text" name="contact_nos" :value="old('contact_nos')" autofocus autocomplete="off" placeholder="Enter Their Personal Contact Number" />
                        <x-input-error :messages="$errors->get('contact_nos')" class="mt-2" />
                    </div>
                </div>

            </form>
        </div>
    </div>
</x-modal>

<x-modal name="add-new-employee-2" :show="false" focusable>
    Test
</x-modal>
