<x-modal name="view-incoming-document" focused>
    <div class="px-5 py-8">
        <div class="font-bold text-2xl">
            <h3 class="text-center pb-4">VIEW DOCUMENT</h3>
        </div>
        <div x-data="documentData" @open-modal.window="if($event.detail.name === 'view-incoming-document'){
            fetchDocument($event.detail.trackingCode);
            show=true;
        }">
        <hr class="bg-gray-400">
            <!--Main Body-->
            <div>
                <p class = "font-light">Tracking Code: <span class="font-bold underline" x-text="`${date_transmitted}-${tracking_code}`"></span></p>
                <p class="font-light">Document Type: <span class = "font-bold underline" x-text="document_type"></span></p>
                <p class="font-light">Subject: <span class="font-bold underline" x-text="subject"></span></p>
                <p class="font-light">Remarks: <span class="font-bold underline" x-text="remarks"></span></p>
                <p class="font-light">Transmitted by: <span class="font-bold underline" x-text="sender"></span></p>
                <p class="font-light">Date Transmitted: <span class="font-bold underline" x-text="date_transmitted"></span></p>
                <p class="font-light">Division: <span class="font-bold underline" x-text="division"></span></p>
                <div class="font-light">Status:
                    <div class="px-3 py-0.5 rounded-xl flex-col justify-center items-center gap-2 inline-flex" x-bind:class="statusBgColor">
                        <div class="justify-center items-center gap-0.5 inline-flex">
                            <span class="text-center text-white text-sm font-medium leading-tight" x-text="document_status"></span>
                        </div>
                    </div>
                </div>
            </div>
            <template x-if="requested == true"><p class = "text-center text-2xl font-bold py-4">THE SENDER WOULD LIKE TO REQUEST SOMETHING</p></template>
            <template x-if="requested == false"><p class = "text-center text-2xl font-bold py-4">THE SENDER DID NOT REQUEST SOMETHING</p></template>


            <div>
                <div>Request Type, if Applicable: <span class="font-bold underline" x-text="request_type"></span></div>
                <div>Document Requested: <span class="font-bold underline" x-text="requested_document"></span></div>
                <div>Request Purpose: <span class="font-bold underline" x-text="purpose"></span></div>
                <div>Request Details: <span class="font-bold underline" x-text="request_details"></span></div>
            </div>

            <!--Buttons-->
            <div class = "justify-between w-full inline-flex">
                <div class = "pt-10 gap-3 justify-between inline-flex">
                    <button x-on:click.prevent="$dispatch('open-modal', {name: 'document-preview', trackingCode: tracking_code, filePath: file_path})"
                        class = "p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">View
                        Document</button>

                    @can('request-response', $incoming_documents)
                    <button x-on:click.prevent="$dispatch('open-modal', {name: 'refer-someone', trackingCode: tracking_code})"
                        class = "p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Refer
                        Someone</button>
                    @endcan
                    <button x-on:click.prevent="$dispatch('open-modal', {name: 'incoming-document-conversation', trackingCode: tracking_code})"
                        class = "p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Open
                        Chat</button>
                    @can('post-announcement', $incoming_documents)
                    <button x-on:click.prevent="$dispatch('open-modal', {name: 'announcement', tracking_code: tracking_code})"
                        class = "p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Post
                        Announcement</button>
                    @endcan
                    <button x-on:click.prevent="$dispatch('open-modal', {name: 'warn-modal', trackingCode: tracking_code})"
                    class = "p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Forward</button>
                </div>
                @can('request-response', $incoming_documents)
                <div>
                    <p class = "pb-4">Accept Request?</p>
                    <div class = "gap-3 inline-flex">
                        <button x-on:click.prevent="$dispatch('open-modal', {name: 'reject-request', trackingCode: tracking_code, requestId: request_id})" x-bind:disabled="!requested" :class="requested ? 'bg-red-600 hover:bg-red-800 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150' : 'bg-gray-300 cursor-not-allowed'"
                            class = "inline-flex items-center p-4 border border-transparent rounded-md text-white  tracking-widest">Reject</button>
                        <button x-on:click.prevent="$dispatch('open-modal', {name: 'accept-request', trackingCode: tracking_code, requestId: request_id})" x-bind:disabled="!requested" :class="requested ? 'bg-green-600 hover:bg-green-900 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150' : 'bg-gray-300 cursor-not-allowed'"
                            class = "p-4  rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest">Accept</button>
                    </div>
                </div>
                @endcan
            </div>
        </div>
    </div>
</x-modal>



<x-modal name="document-preview" :maxWidth="'2xl'">
    <div x-data="previewData" @open-modal.window="if($event.detail.name === 'document-preview'){
        trackingCode = $event.detail.trackingCode;
        fileUrl = $event.detail.filePath;
        loadPreview();
    }">
        <p class="text-2xl font-bold text-center">PREVIEW DOCUMENT</p>
        <div class="items-center justify-items-center gap-3 ">
            <!-- Use `:src` for dynamic binding -->
            <iframe x-bind:src="fileUrl" class="w-[400px] h-[500px] border py-4 border-black items"></iframe>

            <!-- Use `x-bind:href` for dynamic link binding -->
            <a x-bind:href="fileUrl" download class="w-[300px] p-4 bg-[#0d5dba] items rounded-lg text-center text-white tracking-widest hover:bg-blue-900">
                Download Document
            </a>


        </div>
    </div>
</x-modal>
