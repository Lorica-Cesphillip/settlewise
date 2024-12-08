<x-modal name="view-outgoing-document" focused>
    <div class="px-5 py-8">
        <div class="font-bold text-2xl">
            <h3 class="modal-title text-center pb-4">VIEW DOCUMENT</h3>
        </div>
        <div x-data="documentData" @open-modal.window="if($event.detail.name === 'view-outgoing-document'){
            fetchDocument($event.detail.trackingCode);
            show=true;
        }">
            <!--Main Body-->
            <div>
                <div class = "font-light">Tracking Code: <span class="font-bold underline" x-text="`${date_transmitted}-${tracking_code}`"></div>
                <div class="font-light">Document Type: <span class = "font-bold underline" x-text="document_type"></span></div>
                <div class="font-light">Subject: <span class="font-bold underline" x-text="subject"></span></div>
                <div class="font-light">Remarks: <span class="font-bold underline" x-text="remarks"></span></div>
                <div class="font-light">Transmitted to: <span class="font-bold underline" x-text="receiver"></span></div>
                <div class="font-light">Date Transmitted: <span class="font-bold underline" x-text="date_transmitted"></span></div>
                <div class="font-light">Division: <span class="font-bold underline" x-text="division"></span></div>
                <div class="font-light">Status:
                    <div class="px-3 py-0.5 rounded-xl flex-col justify-center items-center gap-2 inline-flex" x-bind:class="statusBgColor">
                        <div class="justify-center items-center gap-0.5 inline-flex">
                            <span class="text-center text-white text-sm font-medium leading-tight" x-text="document_status"></span>
                        </div>
                    </div>
                </div>
            </div>

            <template x-if="requested == true"><p class = "text-center text-2xl font-bold py-4">PLEASE WAIT FOR THE HEAD TO ACCEPT YOUR REQUEST</p></template>
            <template x-if="requested == false"><p class = "text-center text-2xl font-bold py-4">YOU DID NOT REQUEST SOMETHING</p></template>

            <div>
                <p class="font-light">Request Type, if Applicable: <span class="font-bold underline" x-text="request_type"><span></p>
                <p class="font-light">Document Requested: <span class="font-bold underline" x-text="requested_document"><span></p>
                <p class="font-light">Request Purpose: <span class="font-bold underline" x-text="purpose"></span></p>
                <p class="font-light">Request Details: <span class="font-bold underline" x-text="request_details"><span></p>
            </div>

            <!--Buttons-->
            <div class = "pt-5 justify-between w-full inline-flex">
                <div class="pt-5 justify-between w-full inline-flex">
                    <button x-on:click.prevent="$dispatch('open-modal', {name: 'document-preview', trackingCode: tracking_code, filePath: file_path})"
                        class="p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900">
                        View Document
                    </button>
                </div>
                <button x-on:click.prevent="$dispatch('open-modal', {name: 'document-conversation', documentTracker: tracking_code})"
                    class = "p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Open
                    Chat</button>
            </div>
        </div>
    </div>
</x-modal>
