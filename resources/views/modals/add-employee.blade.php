<x-modal name="add-new-employee" :show="false" focusable>
        <!--Close Modal-->
        <div class = "pt-10 pb-4 py-4">
            <button class = "justify-end items-end right-5"  x-on:click.prevent="$dispatch('close-modal', 'add-new-employee')">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.05086 5.63616C6.66033 5.24563 6.02717 5.24563 5.63664 5.63616C5.24612 6.02668 5.24612 6.65984 5.63664 7.05037L10.5864 12.0001L5.63664 16.9499C5.24612 17.3404 5.24612 17.9736 5.63664 18.3641C6.02717 18.7546 6.66033 18.7546 7.05086 18.3641L12.0006 13.4143L16.9504 18.3641C17.3409 18.7546 17.974 18.7546 18.3646 18.3641C18.7551 17.9736 18.7551 17.3404 18.3646 16.9499L13.4148 12.0001L18.3646 7.05037C18.7551 6.65984 18.7551 6.02668 18.3646 5.63616C17.974 5.24563 17.3409 5.24563 16.9504 5.63616L12.0006 10.5859L7.05086 5.63616Z" fill="black"/>
                    </svg>
            </button>
            <div class = "relative p-7">
                <h3 class = "text-center font-bold text-2xl">Add New Employee</h3>

            <form x-data="{ formStep: 1 }" class="space-y-2" action = "{{route('employees.store')}}">
                <div x-cloak x-show="formStep === 1">
                    @csrf
                    <h5 class = "font-bold text-xl">Part I: Personal Information</h5>
                    <div class = "block">

                        <!--Employee Name-->
                        <x-input-label for="name" :value="__('Employee Name')"/>
                        <div class = "inline-flex gap-2 w-full">
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
                </div>
                <div x-cloak x-show="formStep === 2">
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

                        <h5 class = "font-bold text-xl py-2">Part III: Profile Photo</h5>

                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or JPEG(MAX. 400x400px)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div>

                </div>
                <div x-cloak x-show="formStep === 3">Step 3</div>

                <div class = "inline-flex justify-between w-full pt-5">
                    <x-tertiary-button x-cloak x-show="formStep > 1" @click="formStep -= 1" type="button">
                        <x-slot name="icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="button-icon">
                                <path id="icon" d="M7.91683 13.3707C7.19203 12.6006 7.19203 11.3994 7.91683 10.6293L15.2718 2.81464C15.6503 2.41246 16.2832 2.39329 16.6853 2.7718C17.0875 3.15032 17.1067 3.78319 16.7282 4.18537L9.37323 12L16.7282 19.8146C17.1067 20.2168 17.0875 20.8497 16.6853 21.2282C16.2832 21.6067 15.6503 21.5875 15.2718 21.1854L7.91683 13.3707Z" fill="#04326B"/>
                                </g>
                            </svg>
                        </x-slot>
                        <x-slot name="name">Back</x-slot>
                      </x-tertiary-button>
                    <button x-cloak x-show="formStep < 3" @click="formStep += 1" type="button" class="p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white font-semibold tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Next
                    </button>
                    <x-primary-button x-cloak x-show="formStep === 3">
                        <x-slot name="name">Create New Employee</x-slot>
                    </x-primary-button>
                </div>
                </form>
            </div>
        </div>
</x-modal>

<x-modal name="view-employee" :show="false" focusable>

</x-modal>

