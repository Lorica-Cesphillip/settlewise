<x-modal name="view-incoming-document" :show="false" focused>
    <div class="px-5 py-8">
        <div class="font-bold text-2xl">
            <h3 class="modal-title text-center pb-4">VIEW DOCUMENT</h3>
        </div>

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

        <p class = "text-center text-2xl font-bold py-4">THE SENDER WOULD LIKE TO REQUEST SOMETHING</p>

        <div class="grid grid-cols-4 grid-rows-4">
            <div class="col-start-1 row-start-1">Request Type, if Applicable: </div>
            <div class="col-start-1 row-start-2">Document Requested: </div>
            <div class="col-start-1 row-start-3">Request Purpose: </div>
            <div class="col-start-1 row-start-4">Request Details: </div>
            <div class="font-bold underline col-span-3 col-start-2 row-start-1">N/A</div>
            <div class="font-bold underline col-span-3 col-start-2 row-start-2">N/A</div>
            <div class="font-bold underline col-span-3 col-start-2 row-start-3">N/A</div>
            <div class="font-bold underline col-span-3 col-start-2 row-start-4">N/A</div>
        </div>

        <!--Buttons-->
        <div class = "justify-between w-full inline-flex">
            <div class = "pt-10 gap-3 inline-flex">
                <button x-on:click.prevent="$dispatch('open-modal', 'document-preview')"
                    class = "p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">View
                    Document</button>

                @if(session('employee')->division_name == "APHSO Department")
                <button x-on:click.prevent="$dispatch('open-modal', 'refer-someone')"
                    class = "p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Refer
                    Someone</button>

                <button x-on:click.prevent="$dispatch('open-modal', 'document-conversation')"
                    class = "p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Open
                    Chat</button>

                <button x-on:click.prevent="$dispatch('open-modal', 'announcement')"
                    class = "p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Post
                    Announcement</button>
                @endif
            </div>
            @if(session('employee')->division_name == "APHSO Department")
            <div>
                <p class = "pb-4">Accept Request?</p>
                <div class = "gap-3 inline-flex">
                    <button x-on:click.prevent="$dispatch('open-modal', 'reject-request')"
                        class = "inline-flex items-center p-4 bg-red-600 border border-transparent rounded-md text-white  tracking-widest hover:bg-red-800 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">Reject</button>
                    <button x-on:click.prevent="$dispatch('open-modal', 'accept-request')"
                        class = "p-4 bg-green-600 rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-green-900 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150">Accept</button>
                </div>
            </div>

            @else
            <div>
                <button x-on:click.prevent="$dispatch('open-modal', 'document-conversation')"
                class = "p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Open
                Chat</button>
            </div>
            @endif
        </div>
    </div>
</x-modal>

<x-modal name="view-outgoing-document" :show="false" focused>
    <div class="px-5 py-8">
        <div class="modal-content">
            <div class="modal-header">
                <div class="font-bold text-2xl">
                    <h3 class="modal-title text-center pb-4">VIEW DOCUMENT</h3>
                </div>

                <!--Main Body-->
                <div class="grid grid-cols-4 grid-rows-6 py-4">
                    <div class = "font-light">Tracking Code: </div>
                    <div class="font-bold underline col-span-3 col-start-2 row-start-1">01-07-2025-001</div>
                    <div class="font-light col-start-1 row-start-2">Document Type: </div>
                    <div class="font-bold underline col-span-3 row-start-2">Office Order</div>
                    <div class="font-light row-start-3">Subject: </div>
                    <div class="font-bold underline col-span-3 col-start-2 row-start-3">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="font-light col-start-1 row-start-4">Remarks: </div>
                    <div class="font-bold underline col-span-3 row-start-4">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    <div class="font-light row-start-5">Transmitted by: </div>
                    <div class="font-bold underline col-start-2 row-start-5">Juan Dela Cruz</div>
                    <div class="font-light col-start-1 row-start-6">Date Transmitted: </div>
                    <div class="font-bold underline col-start-2 row-start-6">01-07-2025</div>
                    <div class="font-light col-start-3 row-start-5">Division: </div>
                    <div class="font-bold underline col-start-4 row-start-5">Administrative Division</div>
                    <div class="font-light col-start-3 row-start-6">Status: </div>
                    <div class="font-bold underline row-start-6">Pending</div>
                </div>

                <p class = "text-center text-2xl font-bold py-4">THE SENDER WOULD LIKE TO REQUEST SOMETHING</p>

                <div class="grid grid-cols-4 grid-rows-4">
                    <div class="col-start-1 row-start-1">Request Type, if Applicable: </div>
                    <div class="col-start-1 row-start-2">Document Requested: </div>
                    <div class="col-start-1 row-start-3">Request Purpose: </div>
                    <div class="col-start-1 row-start-4">Request Details: </div>
                    <div class="font-bold underline col-span-3 col-start-2 row-start-1">N/A</div>
                    <div class="font-bold underline col-span-3 col-start-2 row-start-2">N/A</div>
                    <div class="font-bold underline col-span-3 col-start-2 row-start-3">N/A</div>
                    <div class="font-bold underline col-span-3 col-start-2 row-start-4">N/A</div>
                </div>

                <!--Buttons-->
                <div class = "pt-5 justify-between w-full inline-flex">
                    <button x-on:click.prevent="$dispatch('open-modal', 'document-preview')"
                        class = "p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">View
                        Document</button>
                    <button x-on:click.prevent="$dispatch('open-modal', 'document-conversation')"
                        class = "p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Open
                        Chat</button>
                </div>
            </div>
        </div>
    </div>
</x-modal>

<!-- Document Preview -->
<x-modal name="document-preview" :maxWidth="'2xl'">
    <div class = "items-center justify-items-center">
        <p class = "text-2xl font-bold text-center">PREVIEW DOCUMENT</p>
        <div class = "w-[400px] h-[500px] border items-center justify-items-center py-4 border-black"></div>
        <a href="" class = "w-[300px] p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" download>Download Document</a>
    </div>
</x-modal>
