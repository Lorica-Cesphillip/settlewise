<!-- Reject Request Modal -->
@can('request-response', $incoming_documents)
    <x-modal name="reject-request" :maxWidth="'2xl'" :show="false" focusable>
        <form x-data="requestResponse"
        @open-modal.window="
            if ($event.detail.name === 'reject-request') {
                request_id = $event.detail.requestId;
                documentTracker = $event.detail.trackingCode;
                action = '{{ route('request.update', ['request_id' => 'request_id_placeholder', 'tracking_code' => 'tracking_code_placeholder']) }}';
                action = action.replace('request_id_placeholder', request_id)
                               .replace('tracking_code_placeholder', documentTracker);
                show = true;
            }
        "
        x-bind:action="action"
        method="POST">
        @method('patch')
        @csrf
            <h3 class = "text-2xl font-bold text-center">Why are you rejecting this request?</h3>
            <input type="hidden" name="granted" value="0">
            <div>
                <x-input-label for="rejection_reason" :value="__('Why do you reject the request?')" />
                <select id="rejection_reason" name="rejection_reason" class="border-gray-300 w-full rounded-md">
                    <option value="">--Select reason of rejection--</option>
                    <!-- PLACEHOLDER OPTIONS -->
                    <option value="Request is Vague">Request is Vague</option>
                    <option value="Unrelated to the Nature of Work">Unrelated to the Nature of Work</option>
                    <option value="It is unecessary">It is unecessary</option>
                    <option value="Others">Others: (please specify)</option>
                </select>
            </div>
            <div>
                <x-input-label for="other-rejection" :value="__('Others (please specify)')" />
                <x-text-input type="text" class="w-full block mt-1" id="other-rejection" name="rejection-reason"
                    :value="old('rejection-reason')" />
            </div>
            <div class="inline-flex pt-4 justify-between w-full">
                <button x-on:click.prevent="$dispatch('close-modal', 'reject-request')"
                    class = "inline-flex items-center p-4 bg-yellow-600 border border-transparent rounded-md text-white  tracking-widest hover:bg-yellow-800 active:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition ease-in-out duration-150">&times;
                    Close</button>
                <button type="submit"
                    class = "p-4 bg-red-600 rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-red-900 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Reject the Request &check;
                </button>
            </div>
        </form>
        </div>
    </x-modal>

    <!-- Accept Request Modal -->
    <x-modal name="accept-request" :maxWidth="'2xl'" :show="false" focusable>
        <div class="w-[600px] h-[500px]">
            <h5 class="text-2xl font-bold text-center pb-4">Request Comments</h5>
            <form x-data="requestResponse"
            @open-modal.window="
                if ($event.detail.name === 'accept-request') {
                    request_id = $event.detail.requestId;
                    documentTracker = $event.detail.trackingCode;
                    action = '{{ route('request.update', ['request_id' => 'request_id_placeholder', 'tracking_code' => 'tracking_code_placeholder']) }}';
                    action = action.replace('request_id_placeholder', request_id)
                                   .replace('tracking_code_placeholder', documentTracker);
                    show = true;
                }
            "
            x-bind:action="action"
            method="POST">
            @method('patch')
            @csrf
                <input type="hidden" name="granted" value="1" />
                <textarea name="request_comments" class="w-full h-[400px] rounded-lg border-gray-300" id="acceptRequestTextarea"
                    placeholder="Add any additional notes or comments here..."></textarea>
                <div class="items-center justify-items-center">
                    <x-primary-button>
                        <x-slot name="name">Forward Document</x-slot>
                        <x-slot name="icon">
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
                        </x-slot>
                    </x-primary-button>
                </div>
            </form>
        </div>
        </div>
        </div>
    </x-modal>
@endcan
