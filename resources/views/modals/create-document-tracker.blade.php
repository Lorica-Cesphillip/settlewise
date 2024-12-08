<x-modal name="create-document-tracker-request" :maxWidth="'5xl'" :show="false" focusable>
    <form
    x-cloak
    x-data="newDocumentTracker"
    @submit.prevent="submitForm"
    action="{{ route('outgoing.store') }}"
    method="POST"
>
        @csrf

        <!-- Progress Bar Component -->
        <div class="flex items-center justify-center py-4">
            <!-- Step 1 -->
            <div :class="formStep >= 1 ? 'bg-[#7fbaff]' : 'bg-gray-400'"
                class="rounded-full flex items-center justify-center text-center py-4 h-[60px] w-[60px]">
                <span class="text-black font-bold">
                    <template x-if="formStep > 1"><div class="text-white">✓</div></template>
                    <template x-if="formStep <= 1"><div>1</div></template>
                </span>
            </div>

            <!-- Connector -->
            <div class="w-32 h-1 bg-gray-200 mx-2">
                <div :class="formStep >= 2 ? 'bg-[#7fbaff]' : 'bg-gray-200'" class="h-1"></div>
            </div>

            <!-- Step 2 -->
            <div :class="formStep >= 2 ? 'bg-[#7fbaff]' : 'bg-gray-400'"
                class="rounded-full flex items-center justify-center text-center py-4 h-[60px] w-[60px]">
                <span  class="text-black font-bold">
                    <template x-if="formStep > 2"><div class="text-white">✓</div></template>
                    <template x-if="formStep <= 2"><div>2</div></template>
                </span>
            </div>

            <!-- Connector -->
            <div class="w-32 h-1 bg-gray-200 mx-2">
                <div :class="formStep >= 3 ? 'bg-[#7fbaff]' : 'bg-gray-200'" class="h-1"></div>
            </div>

            <!-- Step 3 -->
            <div :class="formStep === 3 ? 'bg-[#7fbaff]' : 'bg-gray-400'"
                class="rounded-full flex items-center justify-center text-center py-4 h-[60px] w-[60px]">
                <span  class="text-black font-bold">
                    <template x-if="formStep === 3 || formStep <= 3"><div>3</div></template>
                </span>
            </div>
        </div>


        <div x-cloak x-show="formStep === 1">
            <div class = "text-center text-sm px-2"><span class = "text-red-800">*</span> Required Information</div>
            <div class = "text-center text-3xl font-bold">Document Tracker Form</div>

            <div class = "w-full inline-flex gap-4">
                <div>
                    <x-input-label for="recipient_name" :value="__('Send the Document to: *')" />
                    <select
                        x-model="recipient_name"
                        @change="fetchDivision()"
                        id="recipient_name"
                        class="block mt-1 w-[420px] border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                        name="recipient_name"
                        autofocus
                        autocomplete="off"
                    >
                        <option value="--Please Select Recipient--">--Please Select Recipient--</option>
                        @foreach ($employees as $recipient)
                            <option value="{{ $recipient->full_name }}">{{ $recipient->full_name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('recipient_name')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="document_type" :value="__('Document Type *')" />
                    <select x-model="document_type" @change="others_select = (document_type === 'Others'); requested = (document_type === 'Request')" id="document_type"
                        class="block mt-1 w-[420px] border-gray-300 rounded-md shadow-sm text-black"
                        type="text" name="document_type" autofocus autocomplete="off">
                        <option value="--Please Select a Document Type--">--Please Select a Document Type--</option>
                        @foreach ($document_type as $type)
                            <option value="{{ $type->document_type }}">{{ $type->document_type }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('document_type')" class="mt-2" />
                </div>
                <div class = "items-center justify-items-center pl-4">
                    <label for="urgent" class = "text-center flex font-medium text-sm text-gray-700 py-2">Urgent</label>
                    <input type="hidden" name = "urgent" value="0">
                    <input class = "rounded-md w-6 h-6" id="urgent" name="urgent" type="checkbox" value="1" />
                </div>
            </div>

            <div class = "inline-flex gap-4">
                <div>
                    <x-input-label for="division" :value="__('APHSO Division')" />
                    <x-text-input x-model="division" id="division" class="block mt-1 w-[420px] bg-gray-100"
                        type="text" name="division" autofocus autocomplete="off" disabled />
                    <x-input-error :messages="$errors->get('division')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="others" :value="__('Others: (please specify)')" />
                    <x-text-input x-model="others" id="others" class="block mt-1 w-[420px]" x-bind:class="others_select ? 'bg-white' : 'bg-gray-100'" type="text" name="others" autofocus autocomplete="off" x-bind:disabled="!others_select" />
                    <x-input-error :messages="$errors->get('others')" class="mt-2" />
                </div>
                <div class = "items-center justify-items-center">
                    <x-input-label for="confidential" :value="__('Confidential')" />
                    <input type="hidden" name = "confidential" value="0">
                    <input class = "rounded-md w-6 h-6 items-center justify-items-center" id="confidential" name="confidential" type="checkbox" value="1" />
                </div>
            </div>

            <div>
                <x-input-label for="subject" :value="__('Subject *')" />
                <x-text-input x-model="subject" id="subject" class="block mt-1 w-full" type="text" name="subject" autofocus autocomplete="off" />
                <x-input-error :messages="$errors->get('subject')" class="mt-2" />

                <x-input-label for="remarks" :value="__('Remarks')" />
                <x-text-input x-model="remarks" id="remarks" class="block mt-1 w-full" type="text" name="remarks" autofocus autocomplete="off" />
                <x-input-error :messages="$errors->get('remarks')" class="mt-2" />
            </div>

            <div class = "py-4 w-full justify-between inline-flex">
                <div class = "inline-flex">
                    <div id="iconContainer" class = "w-12 h-12 bg-gray-200 rounded-full items-center justify-items-center py-2.5">
                        <svg id="cloud" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="icon / cloud-upload">
                                <g id="icon">
                                    <path
                                        d="M6 9.5C6 6.46243 8.46243 4 11.5 4C14.1907 4 16.432 5.93318 16.907 8.48668C16.9736 8.84475 17.2297 9.1383 17.5754 9.25295C19.5661 9.9132 21 11.7905 21 14C21 16.7614 18.7614 19 16 19C15.4477 19 15 19.4477 15 20C15 20.5523 15.4477 21 16 21C19.866 21 23 17.866 23 14C23 11.1075 21.2462 8.62697 18.7463 7.55958C17.8909 4.358 14.9717 2 11.5 2C7.35786 2 4 5.35786 4 9.5C4 9.60028 4.00197 9.70014 4.00589 9.79955C2.21048 10.8354 1 12.7754 1 15C1 18.3137 3.68629 21 7 21C7.55228 21 8 20.5523 8 20C8 19.4477 7.55228 19 7 19C4.79086 19 3 17.2091 3 15C3 13.3427 4.00818 11.9185 5.44865 11.3117C5.86549 11.1361 6.11256 10.7026 6.05119 10.2544C6.01748 10.0083 6 9.75644 6 9.5Z"
                                        fill="#475367" />
                                    <path
                                        d="M11.3356 14.2526C11.7145 13.9158 12.2855 13.9158 12.6644 14.2526L14.1644 15.5859C14.5771 15.9528 14.6143 16.5849 14.2474 16.9977C13.9264 17.3588 13.4025 17.4325 13 17.1996V22C13 22.5523 12.5523 23 12 23C11.4477 23 11 22.5523 11 22V17.1996C10.5975 17.4325 10.0736 17.3588 9.75259 16.9977C9.38567 16.5849 9.42285 15.9528 9.83564 15.5859L11.3356 14.2526Z"
                                        fill="#475367" />
                                </g>
                            </g>
                        </svg>

                        <!-- Checkmark Icon (Hidden by Default) -->
                        <svg id="check" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="hidden">
                            <path
                                d="M9 16.2L4.8 12L3.4 13.4L9 19L21 7L19.6 5.6L9 16.2Z"
                                fill="#22c55e" />
                        </svg>
                    </div>
                    <div class = "px-3">
                        <p id="fileName" class = "font-bold">Upload your Document <span class = "text-red-700">*</span></p>
                        <p class = "text-gray-500">PDF Format | Max. 10MB</p>
                    </div>
                </div>
                <div class = "justify-end items-end">
                    <label for="document"
                        class = "flex bg-blue-900 hover:bg-blue-950 text-white text-base px-5 py-2 outline-none rounded w-max cursor-pointer mx-auto">Upload
                        <input type="file" id="document" class = "hidden" name = "document" onchange="updateFileName(this)">
                    </label>
                </div>
                <x-input-error :messages="$errors->get('document')" class="mt-2" />
            </div>

        </div>

        <div x-cloak x-show="formStep === 2">
            <div class = "text-center text-sm px-2"><span class = "text-red-800">*</span> Required Information</div>
            <div class = "text-center text-3xl font-bold">Request Form</div>

            <div class = "inline-flex gap-3 w-full justify-between">
                <div>
                    <x-input-label for="request_type" :value="__('Request Type *')" />
                    <select
                        x-model="request_type"
                        name="request_type"
                        id="request_type"
                        class="block mt-1 w-[320px] border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                        x-bind:disabled="!requested"
                        >
                        <option value="null">--Please Select a Request Type--</option>
                        <option value="Document">Document</option>
                        <option value="Assistance">Assistance</option>
                        <option value="Others">Others (please specify)</option>
                    </select>
                    <x-input-error :messages="$errors->get('request_type')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="request_others" :value="__('Others (please specify)')" />
                    <x-text-input x-model="request_others" id="request_others" class="block mt-1 w-[615px]" x-bind:class="request_type === 'Others' ? 'bg-white' : 'bg-gray-100'"
                        type="text" name="others" autofocus autocomplete="off" x-bind:disabled="request_type !== 'Others'" />
                    <x-input-error :messages="$errors->get('others')" class="mt-2" />
                </div>
            </div>

            <div class = "w-full inline-flex gap-3 justify-between">
                <div>
                    <x-input-label for="requested_document" :value="__('Requested Document (if you select Document) *')" />
                    <x-text-input x-model="requested_document" id="requested_document"
                        class="block mt-1 w-[320px] bg-gray-100" type="text" name="requested_document"
                        :value="old('requested_document')" autofocus autocomplete="off" x-bind:class="request_type === 'Document' ? 'bg-white' : 'bg-gray-100'" x-bind:disabled="request_type !== 'Document'"  />
                    <x-input-error :messages="$errors->get('requested_document')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="request_purpose" :value="__('Request Purpose *')" />
                    <x-text-input x-model="purpose" id="purpose" class="block mt-1 w-[615px] bg-gray-100"
                        type="text" name="purpose" :value="old('purpose')" autofocus autocomplete="off" x-bind:class="request_type === 'Document' ? 'bg-white' : 'bg-gray-100'" x-bind:disabled="request_type !== 'Document'"  />
                    <x-input-error :messages="$errors->get('request_purpose')" class="mt-2" />
                </div>
            </div>

            <div>
                <x-input-label for="request_details" :value="__('Request Details *')" />
                <x-text-input x-model="request_details" id="request_details" class="block mt-1 w-full bg-gray-100"
                    type="text" name="request_details" :value="old('request_details')" autofocus autocomplete="off" x-bind:class="!['Assistance', 'Others'].includes(request_type) ? 'bg-gray-100' : 'bg-white'" x-bind:disabled="!['Assistance', 'Others'].includes(request_type)" />
                <x-input-error :messages="$errors->get('request_details')" class="mt-2" />
            </div>
        </div>

        <div x-cloak x-show="formStep === 3">
            <div class = "text-center text-3xl font-bold p-4">Please Confirm the Details before Sending</div>
            <div class = "border border-black rounded-lg p-8">
                <p class = "font-bold text-lg py-1">Document Details</p>
                <p class = "font-light">Recipient Name: <span class = "font-bold" x-text="recipient_name"></span></p>
                <p class = "font-light">Division: <span class = "font-bold" x-text="division"></span></p>
                <p class = "font-light">Document Type: <span class = "font-bold" x-text="document_type"></span></p>
                <p class = "font-light">Others: <span class = "font-bold" x-text="others"></span></p>
                <p class = "font-light">Subject: <span class = "font-bold" x-text="subject"></span></p>
                <p class = "font-light">Remarks: <span class = "font-bold" x-text="remarks"></span></p>
                <p class = "font-bold text-lg py-1">Request Details</p>
                <p class = "font-light">Request Type: <span class = "font-bold" x-text="request_type"></span></p>
                <p class = "font-light">Requested Document: <span class = "font-bold"
                        x-text="requested_document"></span></p>
                <p class = "font-light">Details: <span class = "font-bold" x-text="request_details"></span></p>
                <p class = "font-light">Purpose: <span class = "font-bold" x-text="purpose"></span></p>

            </div>
        </div>

        <div class = "w-full justify-between inline-flex pt-5 gap-2">
            <x-tertiary-button x-cloak x-show="formStep === 1"
                x-on:click.prevent="$dispatch('close-modal', 'create-document-tracker-request')">
                <x-slot name="name">Close</x-slot>
                <x-slot name="icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.05086 5.63616C6.66033 5.24563 6.02717 5.24563 5.63664 5.63616C5.24612 6.02668 5.24612 6.65984 5.63664 7.05037L10.5864 12.0001L5.63664 16.9499C5.24612 17.3404 5.24612 17.9736 5.63664 18.3641C6.02717 18.7546 6.66033 18.7546 7.05086 18.3641L12.0006 13.4143L16.9504 18.3641C17.3409 18.7546 17.974 18.7546 18.3646 18.3641C18.7551 17.9736 18.7551 17.3404 18.3646 16.9499L13.4148 12.0001L18.3646 7.05037C18.7551 6.65984 18.7551 6.02668 18.3646 5.63616C17.974 5.24563 17.3409 5.24563 16.9504 5.63616L12.0006 10.5859L7.05086 5.63616Z"
                            fill="#04326B" />
                    </svg>
                </x-slot>
            </x-tertiary-button>
            <x-tertiary-button x-cloak x-show="formStep > 1" @click="formStep -= 1" type="button">
                <x-slot name="icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="button-icon">
                            <path id="icon"
                                d="M7.91683 13.3707C7.19203 12.6006 7.19203 11.3994 7.91683 10.6293L15.2718 2.81464C15.6503 2.41246 16.2832 2.39329 16.6853 2.7718C17.0875 3.15032 17.1067 3.78319 16.7282 4.18537L9.37323 12L16.7282 19.8146C17.1067 20.2168 17.0875 20.8497 16.6853 21.2282C16.2832 21.6067 15.6503 21.5875 15.2718 21.1854L7.91683 13.3707Z"
                                fill="#04326B" />
                        </g>
                    </svg>
                </x-slot>
                <x-slot name="name">Back</x-slot>
            </x-tertiary-button>

            <button x-cloak x-show="formStep < 3" @click="formStep += 1" type="button"
                class = "p-4 bg-blue-500 rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-700 focus:ng-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                <div class = "justify-center items-center gap-2 inline-flex">
                    <div class = "font-semibold text-white">Next</div>
                    <div class = "relative">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.0832 13.3707C16.808 12.6006 16.808 11.3994 16.0832 10.6293L8.7282 2.81464C8.34969 2.41246 7.71681 2.39329 7.31464 2.7718C6.91246 3.15032 6.89329 3.78319 7.2718 4.18537L14.6268 12L7.2718 19.8146C6.89329 20.2168 6.91247 20.8497 7.31464 21.2282C7.71681 21.6067 8.34969 21.5875 8.7282 21.1854L16.0832 13.3707Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
            </button>

            <div x-cloak x-show="formStep === 3" class="py-3.5">
                <input type="checkbox" id="confirmation" x-model="confirmed" name="confirmation" class = "rounded-md" />
                <label for="confirmation" class="cursor-pointer">By clicking, you indicate that the Document Details you entered are correct.</label>
            </div>
            <button type="submit" class="p-4  rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest " x-cloak x-show="formStep === 3" :disabled="!confirmed" :class="confirmed ? 'bg-blue-500 hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150' : 'bg-gray-400 cursor-not-allowed'">
                <div class = "justify-center items-center gap-2 inline-flex">
                    <div class = "font-semibold text-white">Send the Document</div>
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
    function updateFileName(input){
        const fileText = document.getElementById('fileName');
        const iconContainer = document.getElementById('iconContainer');
        const cloud = document.getElementById('cloud');
        const check = document.getElementById('check');
        if(input.files && input.files[0]){
            fileName.textContent = input.files[0].name;

            cloud.classList.add('hidden');
            check.classList.remove('hidden');

            iconContainer.classList.remove('bg-gray-200');
            iconContainer.classList.add('bg-green-200');
        }
    }

    document.addEventListener('alpine:init', () => {
        Alpine.data('modalHandler', () => ({
            show: false,
            closeModal() { this.show = false; },
            openModal() { this.show = true; }
        }));
    });
</script>
