import './bootstrap';
import 'bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

window.documentData = function documentData(){
    return{
        tracking_code: '',
        document_type: '',
        subject: '',
        remarks: '',
        sender_id: 0,
        sender: '',
        receiver_id: 0,
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
        comments: '',
        rejection_reason: '',
        is_forwarded: false,
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
                this.requested = data.request_id ? true : false;
                this.request_id = data.request_id;
                this.file_path = data.file_path;
                this.is_forwarded = data.is_forwarded ? true : false;

                if(data.request_type === null){
                    this.request_type = 'N/A';
                    this.requested_document = 'N/A';
                    this.purpose = 'N/A';
                    this.request_details = 'N/A';
                    this.comments = 'N/A';
                    this.rejection_reason = 'N/A';
                }
                    this.request_type = data.request.request_type;
                    this.requested_document = data.request.requested_document ? data.request.requested_document : 'N/A';
                    this.purpose = data.request.request_purpose ? data.request.request_purpose : 'N/A';
                    this.request_details = data.request.request_details ? data.request.request_details : 'N/A';
                    this.comments = data.request.comments_if_granted ? data.request.comments_if_granted : 'N/A';
                    this.rejection_reason = data.request.rejection_reason ? data.request.rejection_reason : 'N/A';


                console.log('Requested:', this.requested, 'Is Forwarded:', this.is_forwarded);
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

window.previewData = function previewData() {
    return {
        trackingCode: '',
        file_path: '',
        loadPreview(filePath) {
            if (!this.filePath) {
                console.log(filePath);
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

window.requestResponse = function request_response(){
    return{
        request_id: 0,
        documentTracker: 0,
        action: '',
        showSuccessModal: false,
        async submitForm(event) {
            event.preventDefault();
            try {
                const response = await fetch(event.target.action, {
                    method: event.target.method,
                    body: new FormData(event.target),
                    headers: { 'Accept': 'application/json' },
                });

                if (response.ok) {
                    this.showSuccessModal = true;
                    this.$dispatch('open-modal', 'request-updated');
                } else {
                    const errorData = await response.json();
                    console.error('Validation Errors:', errorData);
                    this.validationErrors = errorData.errors || {};
                }
            } catch (error) {
                console.error(error);
                this.validationErrors = { general: 'An unexpected error occurred.' };
            }
        }
    }
}

window.referralDivision = function referralDivision() {
    return {
        referred_employee: '',
        division: '',
        others: '',
        for_select: false,
        please_select: false,

        async fetchDivision(trackingCode) {
            if (this.referred_employee == '--APHSO Employee--') {
                this.division = ''; // Clear division when no recipient is selected
            } else {
                try {
                    const response = await fetch(`/api/referral/${encodeURIComponent(trackingCode)}`);
                    if(!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
                    const data = await response.json();
                    this.division = data.division_name ?? 'N/A';
                } catch (error) {
                    console.error('Error fetching division:', error);
                    this.division = ' ';
                }
            }
        },
        manageForPlease(){
            if (this.for_select === 'Others') {
                this.for_select = '';
            }
        }

        };
    }

    window.newDocumentTracker = function document_tracker() {
        return {
            formStep: 1,
            recipient_name: '',
            document_type: '',
            others_select: false,
            urgent: false,
            division: '',
            others: '',
            confidential: false,
            subject: '',
            remarks: '',
            requested: false,
            document: '',
            request_type: '',
            request_others: '',
            requested_document: '',
            request_details: '',
            purpose: '',
            confirmed: false,
            showSuccessModal: false,
            showFailureModal: false,
            validationErrors: {},
            handleDocumentTypeChange() {
                // Handle `document_type`
                if (this.document_type === 'Others') {
                    this.others_select = true;
                } else {
                    this.others_select = false;
                    this.others = ''; // Reset the "others" field when deselected
                }

                // Determine if this is a request
                this.requested = this.document_type === 'Request';

                // Handle `request_type`
                if (this.request_type === 'Document') {
                    this.requested_document = ''; // Reset related fields
                    this.purpose = ''; // Reset purpose if not applicable
                }

                if (this.request_type === 'Others') {
                    this.request_others = ''; // Reset "others" field for request type
                }

                if (this.request_type !== 'Assistance' && this.request_type !== 'Others') {
                    this.request_details = ''; // Reset request details if not applicable
                }
            },
            async fetchDivision() {
                if (this.recipient_name === '--Please Select Recipient--') {
                    this.division = ''; // Clear division when no recipient is selected
                } else {
                    try {
                        const response = await fetch(`/api/employees/${encodeURIComponent(this.recipient_name)}/receiver`);
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        const data = await response.json();
                        this.division = data.division_name ?? 'N/A';
                    } catch (error) {
                        console.error('Error fetching division:', error);
                        this.division = ' ';
                    }
                }
            },
            async submitForm(event) {
                event.preventDefault();
                try {
                    const response = await fetch(event.target.action, {
                        method: event.target.method,
                        body: new FormData(event.target),
                        headers: { 'Accept': 'application/json' },
                    });

                    if (response.ok) {
                        this.showSuccessModal = true;
                        this.$dispatch('open-modal', 'sent-successfully');
                    } else {
                        const errorData = await response.json();
                        console.error('Validation Errors:', errorData);
                        // Bind validation errors to a variable for display
                        this.validationErrors = errorData.errors || {};
                    }
                } catch (error) {
                    console.error(error);
                    this.validationErrors = { general: 'An unexpected error occurred.' };
                }
            },
        };
    };

window.manageEmployee = function manageEmployee() {
    return{
        formStep: 1,
        employee_number: 0,
        displayId: '',
        lname: '',
        fname: '',
        mname: '',
        address: '',
        birthdate: '',
        marital_status: '',
        email: '',
        contact_nos: '',
        division: '',
        division_code: '',
        position: '',
        imageUrl: '',
        image_url: '',
        action: '',
        previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    this.imageUrl = e.target.result;
                    this.showPreview();
                };
                reader.readAsDataURL(file);
            }
        },
        confirmed: false,
        success: false,
        failure: false,
        async fetchEmployeeData(employeeNumber) {
            try {
                const response = await fetch(`/api/employee/${employeeNumber}`);

                if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);

                const data = await response.json();

                this.employee_number = data.employee_number;
                this.displayId = data.employee_number.toString().padStart(4, '0');
                this.lname = data.lname;
                this.fname = data.fname;
                this.mname = data.mname;
                this.address = data.address;
                this.birthdate = data.birthdate;
                this.marital_status = data.martial_status;
                this.email = data.email;
                this.contact_nos = data.contact_nos;
                this.division = data.divisions.division_name;
                this.division_code = data.divisions.abbreviation;
                this.position = data.position;
                this.employee_image = data.image_path;
            } catch (error) {
                console.error('Error fetching employee data:', error);
            }
        },
        async submitForm(event) {
            event.preventDefault();
            try {
                const response = await fetch(event.target.action, {
                    method: event.target.method,
                    body: new FormData(event.target),
                    headers: { 'Accept': 'application/json' },
                });
                if (response.ok) {
                    this.success = true;
                    this.$dispatch('open-modal', 'employee-added-successfully');
                } else {
                    const errorData = await response.json();
                    console.error('Validation Errors:', errorData);
                    this.failure = true;
                    this.$dispatch('open-modal', 'employee-added-failed');
                }
            } catch (error) {
                console.error('Submission Error:', error);
                this.showFailureModal = true;
                this.$dispatch('open-modal', 'employee-added-failed');
            }
        }
    }
}

window.conversation = function conversation(){
    return{
        outgoing_outbox: '',
        outgoing_inbox: '',
        outgoing_division: '',
        incoming_outbox: '',
        incoming_inbox: '',
        incoming_division: '',
        message: '',
        profile_image: '',
        async fetch_conversation(trackingCode)
        {
            const conversation = await fetch(`/api/document/conversation/{document}`);
            const employee = await fetch('');

            if(!conversation.ok) throw new error(`Error: Status: ${conversation.status}`);

            const messages = await conversation.json();
            console.log(messages);

            //For outgoing documents.
            this.outgoing_outbox = messages.employee.to_employee.fname + ' ' + messages.employee.to_employee.mname + ' ' + messages.employee.to_employee.lname;
            this.outgoing_inbox = messages.employee.from_employee.fname + ' ' + messages.employee.from_employee.mname + ' ' + messages.employee.from_employee.lname;
            this.division = messages.employee.to_employee.divisions.division_name;

            //For incoming documents.
            this.incoming_outbox = messages.employee.from_employee.fname + ' ' + messages.employee.from_employee.mname + ' ' + messages.employee.from_employee.lname;
            this.incoming_inbox = messages.employee.to_employee.fname + ' ' + messages.employee.to_employee.mname + ' ' + messages.employee.to_employee.lname;
            this.message = messages.reply;
            this.division = messages.employee.from_employee.divisions.division_name;
        }
    }
}

Alpine.start();



