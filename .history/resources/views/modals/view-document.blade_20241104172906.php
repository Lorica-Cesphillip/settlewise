<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/view_document_modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/documents_table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    
</head>

<body>
    <!-- View Document Modal -->
    <x-modal name="view-document">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-title-container">
                    <hr class="header-divider">
                    <h3 class="modal-title text-center" id="viewDocumentLabel">VIEW DOCUMENT</h3>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Tracking Code:</strong> <span id="modal-tracking-code"></span></p>
                            <p><strong>Document Type:</strong> <span id="modal-document-type"></span></p>
                            <p><strong>Subject:</strong> <span id="modal-subject"></span></p>
                            <p><strong>Remarks:</strong> <span id="modal-remarks"></span></p>
                            <p><strong>Transmitted by:</strong> <span id="modal-transmitter"></span></p>
                            <p><strong>Date Transmitted:</strong> <span id="modal-date-transmitted"></span></p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Division:</strong> <span id="modal-division"></span></p>
                            <p><strong>Status:</strong> <span id="modal-status"></span></p>
                        </div>
                    </div>

                    <h5 class="mt-4">The Sender Did Not Request Something</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Type of Request, if Applicable:</strong> N/A</p>
                            <p><strong>Request Details:</strong> N/A</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Document Requested:</strong> N/A</p>
                            <p><strong>Request Purpose:</strong> N/A</p>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div>
                        <button type="button" class="btn btn-active" id="viewDocumentBtn" data-bs-toggle="modal"
                            data-bs-target="#documentPreviewModal">View Document</button>
                        <button type="button" class="btn btn-active" id="referSomeoneBtn" data-bs-toggle="modal"
                            data-bs-target="#referSomeoneModal">Refer Someone</button>
                        <button type="button" class="btn btn-active" id="openChatBtn" data-bs-toggle="modal"
                            data-bs-target="#chatModal">Open Chat</button>
                        <button type="button" class="btn btn-active" id="postAnnouncementBtn" data-bs-toggle="modal"
                            data-bs-target="#postAnnouncementModal">Post Announcement</button>
                    </div>
                    <div class="request-acceptance">
                        <label>Accept Request?</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-disabled" id="rejectRequestBtn" data-bs-toggle="modal"
                                data-bs-target="#rejectRequestModal">Reject</button>
                            <button type="button" class="btn btn-disabled" id="acceptRequestBtn" data-bs-toggle="modal"
                                data-bs-target="#acceptRequestModal">Accept</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-modal>

    <!-- Document Preview Modal -->
    <x-modal name="document-preview" id="documentPreviewModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="documentPreviewLabel">Document Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="document-preview">Document preview will appear here.</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" id="downloadFileBtn">Download File</button>
                </div>
            </div>
        </div>
    </x-modal>

    <!-- Refer Someone Modal -->
    <div class="modal fade" id="referSomeoneModal" tabindex="-1" aria-labelledby="referSomeoneLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dynamic-size">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-title-container text-center">
                    <hr class="header-divider">
                    <h3 class="modal-title" id="referSomeoneLabel">DOCUMENT REFERRAL FORM</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Left Column Information -->
                        <div class="col-md-6">
                            <p><strong>Tracking Code:</strong></p>
                            <p><strong>Category:</strong></p>
                            <p><strong>Subject:</strong></p>
                            <p><strong>Additional Remarks:</strong></p>
                            <p><strong>Did the Sender Want to Request Something?</strong></p>
                            <p><strong>Sender:</strong></p>
                            <p><strong>Date/Time Sent:</strong></p>
                            <p><strong>APHSO Division:</strong></p>
                            <p><strong>Type of Request, if Applicable:</strong></p>
                        </div>
                        <!-- Right Column Details -->
                        <div class="col-md-6">
                            <p><span id="modal-tracking-code">DOC-2025-01-05-25</span></p>
                            <p><span id="modal-category">Office Order</span></p>
                            <p><span id="modal-subject">Lorem ipsum dolor sit amet...</span></p>
                            <p><span id="modal-additional-remarks">N/A</span></p>
                            <p><span id="modal-request">No</span></p>
                            <p><span id="modal-sender">Juan Dela Cruz</span></p>
                            <p><span id="modal-datetime-sent">2025-01-05 13:00:00</span></p>
                            <p><span id="modal-division">Administrative Division</span></p>
                            <p><span id="modal-type-of-request">N/A</span></p>
                        </div>
                    </div>
                    <!-- Employee Referral Selection -->
                    <div class="full-width-group mt-3">
                        <label for="employee-select"><strong>Select Employee to be Referred</strong></label>
                        <select id="employee-select" class="form-control full-width-select">
                            <option value="">-- APHSO Employee --</option>
                        </select>
                    </div>
                    <!-- Referral Options -->
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="for-select"><strong>For:</strong></label>
                            <select id="for-select" class="form-control">
                                <option value="">-- Select Only One --</option>
                            </select>
                        </div>
                        <div class="col-md-5">
                            <label for="for-others"><strong>Others (please specify):</strong></label>
                            <input type="text" id="for-others" class="form-control">
                        </div>
                        <div class="col-md-1">
                            <label for="urgent-checkbox"><strong>Urgent</strong></label>
                            <input type="checkbox" id="urgent-checkbox" class="form-check-input">
                        </div>
                    </div>
                    <!-- Remarks and Confirmation -->
                    <div class="full-width-group mt-3">
                        <label for="remarks"><strong>Remarks:</strong></label>
                        <textarea id="remarks" class="form-control dynamic-remarks full-width-remarks" rows="2"></textarea>
                    </div>
                    <div class="full-width-group mt-3 d-flex align-items-center justify-content-center">
                        <input type="checkbox" id="confirmReferralCheckbox">
                        <label for="confirmReferralCheckbox" class="ms-2">
                            By clicking, you confirm the Referral Details are correct.
                        </label>
                    </div>
                    <div class="mt-4 d-flex justify-content-between">
                        <button type="button" class="btn btn-outline" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-disabled" id="forwardDocumentBtn" data-bs-toggle="modal" data-bs-target="#documentSentModal" disabled>Forward Document</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Document Successfully Sent Modal -->
    <div class="modal fade" id="documentSentModal" tabindex="-1" aria-labelledby="documentSentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
            <div class="modal-content" style="height: 500px;">
                <div class="modal-body text-center d-flex flex-column justify-content-center align-items-center">
                    <img src="../images/Approval.png" alt="Accepted Image" style="width: 200px; height: 200px;" />
                    <h3 class="mt-4"><strong>Document Successfully Sent</strong></h3>
                    <p>Please wait for updates on your document.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-active" data-bs-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Chat Modal -->
    <div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="chat-header">
                        <img src="https://via.placeholder.com/40x40" alt="Profile Picture" class="chat-profile-img" style="border-radius: 50%;">
                        <div class="chat-user-info">
                            <div class="chat-user-name">Juan Dela Cruz</div>
                            <div class="chat-user-division">Administrative Division</div>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr class="chat-separator">
                <div class="modal-body chat-window" style="height: 500px; overflow-y: auto;">
                    <!-- Chatmate's Message (Left Aligned) -->
                    <div class="chat-message-left">
                        <img src="https://via.placeholder.com/40x40" alt="Chatmate Picture" class="chat-bubble-img" style="border-radius: 50%;">
                        <div class="chat-message-bubble">Hello, I have some questions about the document.</div>
                        <small class="chat-name-timestamp">Juan Dela Cruz • 12:01 PM</small>
                    </div>
                    <!-- User's Message (Right Aligned) -->
                    <div class="chat-message-right">
                        <div class="chat-message-bubble message-own">Sure, what would you like to know?</div>
                        <small class="chat-name-timestamp">You • 12:02 PM</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="text" class="form-control" placeholder="Type a message">
                    <button type="button" class="btn btn-active"><i class="bi bi-send-fill"></i> Send</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Post Announcement Modal -->
    <div class="modal fade" id="postAnnouncementModal" tabindex="-1" aria-labelledby="postAnnouncementLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" style="max-width: 700px; height: 1000px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="post-announcement-title-container text-center">
                    <h3 class="modal-title" id="postAnnouncementLabel">POST AN ANNOUNCEMENT</h3>
                </div>
                <div class="modal-body">
                    <!-- Announcement Details -->
                    <div class="mb-3">
                        <label for="announcementTitleInput">What is the Announcement All About?</label>
                        <input type="text" class="form-control" placeholder="Event Title">
                    </div>
                    <div class="mb-3">
                        <label for="announcementLocationInput">Where will the event happen?</label>
                        <input type="text" class="form-control" placeholder="Location">
                    </div>
                    <div class="mb-3">
                        <label for="attendeesSelect">Who will attend such event?</label>
                        <select class="form-select" id="attendeesSelect">
                            <option value="">-- Select Attendees --</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="eventDateTimeInput">When and what time will the event occur?</label>
                        <input type="datetime-local" class="form-control calendar-input">
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-outline" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-active">Announce</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Announcement Alert Confirmation Modal -->
    <div class="modal fade" id="announcementConfirmation" tabindex="-1" aria-labelledby="announcementConfirmationLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
            <div class="modal-content" style="height: 500px;">
                <div class="modal-body text-center d-flex flex-column justify-content-center align-items-center">
                    <img src="../images/Warning.png" alt="Warning Icon" style="width: 200px; height: 200px;" />
                    <h3 class="mt-4"><strong>Alert</strong></h3>
                    <p>Are you sure that the announcement is correct?</p>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-outline" data-bs-toggle="modal" data-bs-target="#postAnnouncementModal">Go Back</button>
                    <button type="button" class="btn btn-active" data-bs-toggle="modal" data-bs-target="#announcementPosted">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Announcement Posted Modal -->
    <div class="modal fade" id="announcementPosted" tabindex="-1" aria-labelledby="announcementPostedLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
            <div class="modal-content" style="height: 500px;">
                <div class="modal-body text-center d-flex flex-column justify-content-center align-items-center">
                    <img src="../images/Approval.png" alt="Approval Icon" style="width: 200px; height: 200px;" />
                    <h3 class="mt-4"><strong>Announcement Posted</strong></h3>
                    <p>Your employees will be notified.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-active" data-bs-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Announcement Error Modal -->
    <div class="modal fade" id="announcementError" tabindex="-1" aria-labelledby="announcementErrorLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
            <div class="modal-content" style="height: 500px;">
                <div class="modal-body text-center d-flex flex-column justify-content-center align-items-center">
                    <img src="../images/Cancel.png" alt="Error Icon" style="width: 200px; height: 200px;" />
                    <h3 class="mt-4"><strong>Error While Posting Announcement</strong></h3>
                    <p>Please try again.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-active" data-bs-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Reject Request Modal -->
    <div class="modal fade" id="rejectRequestModal" tabindex="-1" aria-labelledby="rejectRequestModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 717px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <h5 class="modal-title">Reject the request?</h5>
                    <div class="form-group mt-4 centered-select-container">
                        <label for="causeOfRejection" class="form-label">Cause of Rejection</label>
                        <select id="causeOfRejection" class="form-control centered-select">
                            <option value="">Select reason...</option>
                            <option value="Reason 1">Reason 1</option>
                            <option value="Reason 2">Reason 2</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-outline btn-custom" data-bs-dismiss="modal">No, Cancel</button>
                    <button type="button" class="btn btn-active btn-custom" data-bs-toggle="modal" data-bs-target="#requestRejectedModal">Yes, Proceed</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Request Rejected Modal -->
    <div class="modal fade" id="requestRejectedModal" tabindex="-1" aria-labelledby="requestRejectedModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
            <div class="modal-content" style="height: 500px;">
                <div class="modal-body text-center d-flex flex-column justify-content-center align-items-center">
                    <img src="../images/Approval.png" alt="Rejected Icon" style="width: 200px; height: 200px;" />
                    <h3 class="mt-4"><strong>Request Rejected</strong></h3>
                    <p>The receiver will be informed.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-active" data-bs-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Accept Request Modal -->
    <div class="modal fade" id="acceptRequestModal" tabindex="-1" aria-labelledby="acceptRequestModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 717px;">
            <div class="modal-content" style="height: 645px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="acceptRequestModalLabel">Accept Request</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="form-group centered-textarea-container">
                        <textarea class="form-control centered-textarea" id="acceptRequestTextarea" rows="15" style="resize: none;" placeholder="Add any additional notes or comments here..."></textarea>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-active" id="forwardRequestBtn" data-bs-toggle="modal" data-bs-target="#requestAcceptedModal">Forward Request</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Request Accepted Modal -->
    <div class="modal fade" id="requestAcceptedModal" tabindex="-1" aria-labelledby="requestAcceptedModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
            <div class="modal-content" style="height: 500px;">
                <div class="modal-body text-center d-flex flex-column justify-content-center align-items-center">
                    <img src="../images/Approval.png" alt="Accepted Icon" style="width: 200px; height: 200px;" />
                    <h3 class="mt-4"><strong>Request Accepted</strong></h3>
                    <p>The receiver will be informed.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-active" data-bs-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/progress.js') }}"></script>

</body>