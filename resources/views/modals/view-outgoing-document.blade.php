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
            request_id: 0,
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
                    console.log(data);

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
                    this.requested = data.request_id ? true : false;
                    this.request_id = data.request_id;
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
