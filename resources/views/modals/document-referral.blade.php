<!-- Refer Someone Modal -->
<x-modal name="refer-someone" :maxWidth="'5xl'" :show="false" focusable>
    <h3 class="font-bold text-2xl text-center">DOCUMENT REFERRAL FORM</h3>
            <!--Main Body-->
        <div class="grid grid-cols-4 grid-rows-6 py-4">
            <div class = "font-light">Tracking Code: </div>
            <div class="font-bold underline col-span-3 col-start-2 row-start-1">01-07-2025-001</div>
            <div class="font-light col-start-1 row-start-2">Document Type: </div>
            <div class="font-bold underline col-span-3 row-start-2">Office Order</div>
            <div class="font-light row-start-3">Subject: </div>
            <div class="font-bold underline col-span-3 col-start-2 row-start-3">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            <div class="font-light col-start-1 row-start-4">Remarks: </div>
            <div class="font-bold underline col-span-3 row-start-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            <div class="font-light row-start-5">Transmitted by: </div>
            <div class="font-bold underline col-start-2 row-start-5">Juan Dela Cruz</div>
            <div class="font-light col-start-1 row-start-6">Date Transmitted: </div>
            <div class="font-bold underline col-start-2 row-start-6">01-07-2025</div>
            <div class="font-light col-start-3 row-start-5">Division: </div>
            <div class="font-bold underline col-start-4 row-start-5">Administrative Division</div>
            <div class="font-light col-start-3 row-start-6">Status: </div>
            <div class="font-bold underline row-start-6">Pending</div>
        </div>
    <form x-cloak x-data="{ referred_employee: '', division: '', for: '', for_select: false, please: '', please_others: false, confirmation: false }" action="{{ route('outgoing.storeReferral') }}" method="POST">
        @csrf
        <!-- Full-width Select Employee to be Referred -->
        <div x-data="referralDivision()" class="inline-flex gap-3">
            <div>
                <x-input-label for="employee-select" :value="__('Select Employee to be Referred:')"/>
                <select x-model="referred_employee" id="employee-select" @change="fetchDivision()" class="mt-1 w-[465px] block rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" name="to_be_referred" autofocus autocomplete="off">
                    <!-- PLACEHOLDER OPTIONS -->
                    <option value="">-- APHSO Employee --</option>
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->employee_number }}">{{ $employee->full_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('division')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="division" :value="__('APHSO Division')"/>
                <x-text-input x-model="division" id="division" class="block mt-1 w-[465px] bg-gray-100" type="text" name="division"  autofocus autocomplete="off" :disabled="true"/>
                <x-input-error :messages="$errors->get('division')" class="mt-2" />
            </div>
        </div>
        <!-- For and Others (please specify) Fields -->
        <div class = "inline-flex gap-3 justify-evenly">
            <div>
                <x-input-label for="for" :value="__('For: ')"/>
                <select id="for" @change="for_select = ($event.target.value === 'Others')"
                class="mt-1 w-[300px] block rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm"
                name="for" autofocus autocomplete="off">
                    <!-- PLACEHOLDER OPTIONS -->
                    <option value="">-- Select Only One --</option>
                    <option value="Appropriate Action">Appropriate Action</option>
                    <option value="Comment and Recommendation">Comment and Recommendation</option>
                    <option value="Review and Initial, if OK">Review and Initial, if OK</option>
                    <option value="Dissemination">Dissemination</option>
                    <option value="Filing and/or Posting">Filing and/or Posting</option>
                    <option value="Others">Others</option>
                </select>
                <x-input-error :messages="$errors->get('for')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="for_others" :value="__('Others (please specify): ')"/>
                <x-text-input x-text-input id="for_others"
                class="block mt-1 w-[570px]"
                x-bind:class="for_select ? 'bg-white' : 'bg-gray-100'"
                type="text" name="for_others"
                x-bind:disabled="!for_select"
                autocomplete="off" />
                <x-input-error :messages="$errors->get('for')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="for_urgent" :value="__('Urgent')"/>
                <div class="p-2">
                    <input id="for_urgent" type="checkbox" class = "w-7 h-7 border-black rounded-md"/>
                </div>
            </div>
        </div>

        <!-- Please and Others (please specify) Fields -->
        <div class="inline-flex gap-3">
            <div>
                <x-input-label for="please" :value="__('Please: ')"/>
                <select id="please" @change="please_others = ($event.target.value === 'Others')"
                class="mt-1 w-[300px] block rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm"
                name="please" autofocus autocomplete="off">
                    <!-- PLACEHOLDER OPTIONS -->
                    <option value="">-- Select Only One --</option>
                    <option value="Let me Know the Status">Let me Know the Status</option>
                    <option value="Attend to this">Attend to this</option>
                    <option value="Study and Discuss with Me">Study and Discuss with Me</option>
                    <option value="Represent Me">Represent Me</option>
                    <option value="See Correction">See Correction</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div>
                <x-input-label for="please" :value="__('Others (please specify): ')"/>
                <x-text-input id="please_others"
                class="block mt-1 w-[570px]"
                x-bind:class="please_others ? 'bg-white' : 'bg-gray-100'"
                type="text" name="please_others"
                x-bind:disabled="!please_others"
                autocomplete="off" />
                <x-input-error :messages="$errors->get('please')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="please_urgent" :value="__('Urgent')"/>
                <div class="p-2">
                    <input id="please_urgent" type="checkbox" class = " w-7 h-7 align-middle border-black rounded-md"/>
                </div>
            </div>
        </div>

        <div>
            <x-input-label for="remarks" :value="__('Additional Remarks: ')"/>
            <x-text-input id="remarks" class="block mt-1 w-full" type="text" name="remarks" autofocus autocomplete="off"/>
            <x-input-error :messages="$errors->get('remarks')" class="mt-2" />
        </div>



        <div class="mt-4 inline-flex justify-between w-full gap-3">
            <x-tertiary-button x-on:click.prevent="$dispatch('close-modal', 'refer-someone')">
                <x-slot name="name">Close</x-slot>
                <x-slot name="icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.05086 5.63616C6.66033 5.24563 6.02717 5.24563 5.63664 5.63616C5.24612 6.02668 5.24612 6.65984 5.63664 7.05037L10.5864 12.0001L5.63664 16.9499C5.24612 17.3404 5.24612 17.9736 5.63664 18.3641C6.02717 18.7546 6.66033 18.7546 7.05086 18.3641L12.0006 13.4143L16.9504 18.3641C17.3409 18.7546 17.974 18.7546 18.3646 18.3641C18.7551 17.9736 18.7551 17.3404 18.3646 16.9499L13.4148 12.0001L18.3646 7.05037C18.7551 6.65984 18.7551 6.02668 18.3646 5.63616C17.974 5.24563 17.3409 5.24563 16.9504 5.63616L12.0006 10.5859L7.05086 5.63616Z" fill="#04326B"/>
                    </svg>
                </x-slot>
            </x-tertiary-button>
            <div class="mt-3">
                <input x-model="confirmation" type="checkbox" id="confirmReferralCheckbox" class = "rounded-md">
                <label for="confirmReferralCheckbox">
                    By clicking, you indicate that the Referral Details you inputted are correct.
                </label>
            </div>
            <button type="submit" class="p-4  rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest " x-cloak :disabled="!confirmation" :class="confirmation ? 'bg-blue-500 hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150' : 'bg-gray-400 cursor-not-allowed'">
                <div class = "justify-center items-center gap-2 inline-flex">
                    <div class = "font-semibold text-white">Forward Document</div>
                        <div class = "relative">
                        <svg width="24" height="24" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="icon / send">
                                <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.9747 11.8999C18.6126 11.1628 18.6126 8.83724 16.9747 8.1002L5.19204 2.798C3.60512 2.08388 1.89392 3.51487 2.31598 5.20311L3.13604 8.48334C3.32524 9.24014 3.91689 9.81693 4.65478 10C3.91689 10.1831 3.32524 10.7599 3.13604 11.5167L2.31598 14.797C1.89392 16.4852 3.60511 17.9162 5.19204 17.2021L16.9747 11.8999ZM4.5081 4.31786L14.9777 9.02917L5.13034 8.39386C4.94948 8.38219 4.7969 8.25495 4.75294 8.07912L3.93289 4.79889C3.84848 4.46124 4.19071 4.17504 4.5081 4.31786ZM5.13034 11.6062L14.9777 10.9709L4.5081 15.6822C4.19071 15.825 3.84847 15.5388 3.93289 15.2012L4.75294 11.921C4.7969 11.7451 4.94948 11.6179 5.13034 11.6062Z"
                                    fill="white" />
                            </g>
                        </svg>
                    </div>
                </div>
            </button>
        </div>
    </form>
</x-modal>

<script>
    function referralDivision() {
    return {
        referred_employee: '',
        division: '',
        others: '',

            async fetchDivision() {
                if (this.referred_employee == '--APHSO Employee--') {
                    this.division = ''; // Clear division when no recipient is selected
                } else {
                    try {
                        const response = await fetch('/api/referral/${encodeURIComponent(this.referred_employee)}');
                        if (!response.ok) {
                            throw new Error('An Error Occured while retrieving data');
                        }
                        const data = await response.json();
                        this.division = data.division_name ?? 'N/A';
                    } catch (error) {
                        console.error('Error fetching division:', error);
                        this.division = ' ';
                    }
                }
            }
        };
    }
</script>
