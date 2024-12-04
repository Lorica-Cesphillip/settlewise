<x-modal name="view-incoming-document" focused>
    <div class="px-5 py-8">
        <div class="font-bold text-2xl">
            <h3 class="modal-title text-center pb-4">VIEW DOCUMENT</h3>
        </div>
        <div x-data="documentData" @open-modal.window="if($event.detail.name === 'view-incoming-document'){
            fetchDocument($event.detail.trackingCode);
            show=true;
        }">
            <!--Main Body-->
            <div>
                <div class = "font-light">Tracking Code: <span class="font-bold underline" x-text="`${date_transmitted}-${tracking_code}`"></span></div>
                <div class="font-light">Document Type: <span class = "font-bold underline" x-text="document_type"></span></div>
                <div class="font-light">Subject: <span class="font-bold underline" x-text="subject"></span></div>
                <div class="font-light">Remarks: <span class="font-bold underline" x-text="remarks"></span></div>
                <div class="font-light">Transmitted by: <span class="font-bold underline" x-text="sender"></span></div>
                <div class="font-light">Date Transmitted: <span class="font-bold underline" x-text="date_transmitted"></span></div>
                <div class="font-light">Division: <span class="font-bold underline" x-text="division"></span></div>
                <div class="font-light">Status:
                    <div class="px-3 py-0.5 rounded-xl flex-col justify-center items-center gap-2 inline-flex" x-bind:class="statusBgColor">
                        <div class="justify-center items-center gap-0.5 inline-flex">
                            <span class="text-center text-white text-sm font-medium leading-tight" x-text="document_status"></span>
                        </div>
                    </div>
                    <span class="font-bold underline" :class="classBgColor" ></span></div>
            </div>

            <p class = "text-center text-2xl font-bold py-4">THE SENDER WOULD LIKE TO REQUEST SOMETHING</p>

            <div class="grid grid-cols-4 grid-rows-4">
                <div class="col-start-1 row-start-1">Request Type, if Applicable: <span class="font-bold underline" x-text="request_type"></span></div>
                <div class="col-start-1 row-start-2">Document Requested: <span class="font-bold underline" x-text="requested_document"></span></div>
                <div class="col-start-1 row-start-3">Request Purpose: <span class="font-bold underline" x-text="purpose"></span></div>
                <div class="col-start-1 row-start-4">Request Details: <span class="font-bold underline" x-text="request_details"></span></div>
            </div>

            <!--Buttons-->
            <div class = "justify-between w-full inline-flex">
                <div class = "pt-10 gap-3 inline-flex">
                    <button x-on:click.prevent="$dispatch('open-modal', 'document-preview')"
                        class = "p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">View
                        Document</button>

                    @if(Auth::user()->divisions->division_name == "APHSO Department")
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
                @if(Auth::user()->divisions->division_name == "APHSO Department")
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
    </div>
</x-modal>

<x-modal name="view-outgoing-document" focused>
    <div class="px-5 py-8">
        <div class="modal-content">
            <div class="modal-header">
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
                            <div class="font-light">Status: <span class="font-bold underline" x-text="document_status"></span></div>
                    </div>

                    <p class = "text-center text-2xl font-bold py-4">THE SENDER WOULD LIKE TO REQUEST SOMETHING</p>

                    <div class="grid grid-cols-4 grid-rows-4">
                        <div class="col-start-1 row-start-1">Request Type, if Applicable: </div>
                        <div class="col-start-1 row-start-2">Document Requested: </div>
                        <div class="col-start-1 row-start-3">Request Purpose: </div>
                        <div class="col-start-1 row-start-4">Request Details: </div>
                    </div>

                    <!--Buttons-->
                    <div class = "pt-5 justify-between w-full inline-flex">
                        <div class="pt-5 justify-between w-full inline-flex">
                            <button x-on:click.prevent="openPreviewModal()"
                                class="p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900">
                                View Document
                            </button>
                        </div>
                        <button x-on:click.prevent="$dispatch('open-modal', 'document-conversation')"
                            class = "p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Open
                            Chat</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-modal>

<x-modal name="document-preview" :maxWidth="'2xl'" :show="false">
    <div x-data="previewData" @open-modal.window="if($event.detail.name === 'document-preview'){
        trackingCode = $event.detail.trackingCode;
        filePath = $event.detail.filePath;
        loadPreview();
    }">
        <p class="text-2xl font-bold text-center">PREVIEW DOCUMENT</p>
        <div class="items-center justify-items-center gap-3 ">
            <iframe x-bind:src="filePath" class="w-[400px] h-[500px] border py-4 border-black items"></iframe>
            <a x-bind:href="filePath" download class="w-[300px] p-4 bg-[#0d5dba] items rounded-lg text-center text-white tracking-widest hover:bg-blue-900">
                Download Document
            </a>
        </div>
    </div>
</x-modal>

<script>
    function documentData(){
        return{
            tracking_code: '',
            document_type: '',
            subject: '',
            remarks: '',
            sender: '',
            receiver: '',
            date_transmitted: '',
            division: '',
            document_status: '',
            requested: false,
            request_type: '',
            requested_document: '',
            purpose: '',
            request_details: '',
            statusBgColor: '',
            file_path: '',
            async fetchDocument(trackingCode){
                try{
                    const response = await fetch(`/api/document/view/${trackingCode}`);

                    if(!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
                    const data = await response.json();

                    this.tracking_code = data.document_tracking_code.toString().padStart(3, '0');
                    this.document_type = data.document_type.document_type;
                    this.subject = data.subject;
                    this.remarks = data.remarks ? data.remarks : 'N/A';
                    this.sender = data.from_employee.fname + ' ' + data.from_employee.mname + ' ' + data.from_employee.lname;
                    this.receiver = data.to_employee.fname + ' ' + data.to_employee.mname + ' ' + data.to_employee.lname;
                    this.date_transmitted = data.created_at;
                    this.division = data.from_employee.divisions.division_name;
                    this.document_status = data.status.document_status;
                    this.statusBgColor = this.getBgColor(data.status.status_id);
                    this.request_type = data.request.request_type ? data.request.request_type : 'N/A';
                    this.requested_document = data.request.requested_document ? data.request.requested_document : 'N/A';
                    this.purpose = data.request.request_purpose ? data.request.request_purpose : 'N/A';
                    this.request_details = data.request_details ? data.request_details : 'N/A';
                    this.file_path = data.file_path;
                }catch(error){
                    console.error('There is something wrong while retrieving document information. Error: ', error);
                }
            },

            getBgColor(statusId) {
                return {
                    1: 'bg-yellow-500', // Pending
                    2: 'bg-green-500',  // Request Accepted
                    3: 'bg-red-500',    // Request Rejected
                    4: 'bg-blue-500',   // Document Forwarded
                    5: 'bg-purple-500', // To be Referred
                    6: 'bg-gray-500',   // Archived
                    7: 'bg-teal-500',   // Announced
                }[statusId] || 'bg-gray-300'; // Default
            },
            openPreviewModal() {
                $dispatch('open-modal', {
                    name: 'document-preview',
                    trackingCode: tracking_code,
                    filePath: this.file_path
                });
            }
        }
    }

    function previewData() {
        return {
            trackingCode: '',
            filePath: '',
            loadPreview() {
                if (!this.filePath) {
                    console.error("No file path provided for preview.");
                    alert("Document file is missing or invalid.");
                    return;
                }

                // Log the file path for debugging
                console.log("Attempting to load file:", this.filePath);

                // Check if the file is accessible
                fetch(this.filePath)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`Failed to fetch document. Status: ${response.status}`);
                        }

                        // Update iframe src
                        const iframe = document.querySelector('iframe');
                        if (iframe) {
                            console.log("Setting iframe source to:", this.filePath);
                            iframe.src = this.filePath;
                        }
                    })
                    .catch(error => {
                        console.error("Error loading document:", error);
                        alert("Failed to load the document. Please try again.");
                    });
            }
        };
    }
</script>
