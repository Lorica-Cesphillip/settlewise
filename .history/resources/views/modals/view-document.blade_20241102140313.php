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
                        <button type="button" class="btn btn-active" id="openChatBtn"
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