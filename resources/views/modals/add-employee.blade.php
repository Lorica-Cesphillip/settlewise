<x-modal name="add-new-employee" :show="false" focusable>

    <!--Close Modal-->
    <div class = "pt-10 pb-4 py-4">
        <button class = "justify-end items-end right-5"  x-on:click.prevent="$dispatch('close-modal', 'add-new-employee')">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.05086 5.63616C6.66033 5.24563 6.02717 5.24563 5.63664 5.63616C5.24612 6.02668 5.24612 6.65984 5.63664 7.05037L10.5864 12.0001L5.63664 16.9499C5.24612 17.3404 5.24612 17.9736 5.63664 18.3641C6.02717 18.7546 6.66033 18.7546 7.05086 18.3641L12.0006 13.4143L16.9504 18.3641C17.3409 18.7546 17.974 18.7546 18.3646 18.3641C18.7551 17.9736 18.7551 17.3404 18.3646 16.9499L13.4148 12.0001L18.3646 7.05037C18.7551 6.65984 18.7551 6.02668 18.3646 5.63616C17.974 5.24563 17.3409 5.24563 16.9504 5.63616L12.0006 10.5859L7.05086 5.63616Z" fill="black"/>
                </svg>
        </button>
        <div class = "relative p-4">
            <h3 class = "text-center font-bold text-2xl">Add New Employee</h3>

            <!--Progress Bar-->
            <div class="w-[560px] h-[60px] relative items-center p-6 justify-between">

                <div class="w-[60px] h-[60px] left-0 top-0 absolute bg-[#7fbaff] rounded-[30px] justify-between">
                    <div class="w-6 h-[33px] top-[14px] absolute text-center text-black text-2xl font-normal leading-[34.80px]">1</div>
                </div>
                <div class="w-[491px] h-[18px] left-[26px] top-[22px] absolute flex-col justify-start items-start gap-1 inline-flex">
                    <div class="h-3 pr-[489.69px] bg-[#eff1f4] rounded-[20px] justify-start items-center inline-flex">
                        <div class="grow shrink basis-0 h-3 bg-white"></div>
                    </div>
                </div>
                <div class="w-[60px] h-[60px]  top-0 absolute bg-[#f0f2f5] rounded-[30px]">
                    <div class="w-6 h-[33px] left-[518px] top-[14px] absolute text-center text-black text-2xl font-normal leading-[34.80px]">2</div>
                </div>
            </div>

            <!--Form Part 1-->
            <form action="#" method = "POST">
                @csrf
                <h5 class = "font-bold text-xl">Part I: Personal Information</h5>
                <div class = "block">

                    <!--Employee Name-->
                    <x-input-label for="name" :value="__('Employee Name')"/>
                    <div class = "inline-flex columns-3 gap-2">
                        <div>
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')" autofocus autocomplete="off" placeholder="Last Name" required/>
                            <x-input-error :messages="$errors->get('lname')" class="mt-2" />
                        </div>

                        <div>
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')" autofocus autocomplete="off" placeholder="First Name" required/>
                            <x-input-error :messages="$errors->get('fname')" class="mt-2" />
                        </div>

                        <div>
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="mname" :value="old('mname')" autofocus autocomplete="off" placeholder="Middle Name" required/>
                            <x-input-error :messages="$errors->get('mname')" class="mt-2" />
                        </div>
                    </div>

                    <!--Home Address-->
                    <div class = "block">
                        <x-input-label for="address" :value="__('Home Address')"/>
                        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" autofocus autocomplete="off" placeholder="Lot/Blg. No, Street, Barangay/ Subdivision, Municipality/City, Province, ZIP Code" required/>
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>
                </div>

                <div class = "block columns-2">
                    <div>
                        <x-input-label for="birthday" :value="__('Birthdate')"/>
                        <x-text-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" :value="old('birthday')" autofocus autocomplete="off" placeholder="Select Employee's Birthdate" required/>
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
                        <x-input-error :messages="$errors->get('email')" class="mt-2" required/>
                    </div>

                    <div>
                        <x-input-label for="contact_nos" :value="__('Contact Number')"/>
                        <x-text-input id="contact_nos" class="block mt-1 w-full" type="text" name="contact_nos" :value="old('contact_nos')" autofocus autocomplete="off" placeholder="Enter Their Personal Contact Number" required/>
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

                    <x-next-button x-on:click="open = ! open"/>
                </div>
                <div x-data = "{open:false}">
                    <div x-show = "open" x-transition>
                        <!--Part 2: Job Position and Part 3: Profile Picture-->
                        <h5 class = "font-bold text-xl">Part II: Personal Information</h5>
                        <div class = "columns-2 block">
                            <div>
                                <x-input-label for="division" :value="__('APHSO Division')"/>
                                <select id="division" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="division" :value="old('division')" autofocus autocomplete="off">
                                    <option value = "">--Select Division--</option>
                                    <option value = "2">Administrative Division</option>
                                    <option value = "3">Economic Support and Services Division</option>
                                    <option value = "4">Settlement Plans and Projects Division</option>
                                </select>
                                <x-input-error :messages="$errors->get('divisions')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="position" :value="__('Position')"/>
                                <x-text-input id="position" class="block mt-1 w-full" type="text" name="position" :value="old('position')" autofocus autocomplete="off" placeholder="APHSO Position" />
                                <x-input-error :messages="$errors->get('position')" class="mt-2" required/>
                            </div>
                        </div>

                        <x-input-label for="default_size">Input Employee Picture, if there's any.</x-input-label>
                        <input class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="default_size" type="file">
                    </div>
                </div>


            </form>
        </div>
    </div>
</x-modal>
