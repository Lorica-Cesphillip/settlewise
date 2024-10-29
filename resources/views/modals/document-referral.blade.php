    <!-- Refer Someone Modal -->
    <div class="modal fade" id="referSomeoneModal" tabindex="-1" aria-labelledby="referSomeoneLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dynamic-size"> <!-- Dynamic Size Modal -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-title-container">
                    <hr class="header-divider">
                    <h3 class="modal-title text-center" id="referSomeoneLabel">DOCUMENT REFERRAL FORM</h3>
                </div>

                <div class="modal-body">
                    <div class="row">
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

                    <!-- Full-width Select Employee to be Referred -->
                    <div class="full-width-group mt-3">
                        <label for="employee-select"><strong>Select Employee to be Referred</strong></label>
                        <select id="employee-select" class="form-control full-width-select">
                            <!-- PLACEHOLDER OPTIONS -->
                            <option value="">-- APHSO Employee --</option>
                        </select>
                    </div>

                    <!-- For and Others (please specify) Fields -->
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="for-select"><strong>For:</strong></label>
                            <select id="for-select" class="form-control">
                                <!-- PLACEHOLDER OPTIONS -->
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

                    <!-- Please and Others (please specify) Fields -->
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="please-select"><strong>Please:</strong></label>
                            <select id="please-select" class="form-control">
                                <!-- PLACEHOLDER OPTIONS -->
                                <option value="">-- Select Only One --</option>
                            </select>
                        </div>
                        <div class="col-md-5">
                            <label for="please-others"><strong>Others (please specify):</strong></label>
                            <input type="text" id="please-others" class="form-control">
                        </div>
                        <div class="col-md-1">
                            <label for="please-urgent-checkbox"><strong>Urgent</strong></label>
                            <input type="checkbox" id="please-urgent-checkbox" class="form-check-input">
                        </div>
                    </div>

                    <div class="full-width-group mt-3">
                        <label for="remarks"><strong>Remarks:</strong></label>
                        <textarea id="remarks" class="form-control dynamic-remarks full-width-remarks" rows="2"></textarea>
                    </div>

                    <div class="full-width-group mt-3 d-flex align-items-center justify-content-center">
                        <input type="checkbox" id="confirmReferralCheckbox">
                        <label for="confirmReferralCheckbox" id="confirmReferralCheckboxLabel" class="ms-2">
                            By clicking, you indicate that the Referral Details you inputted are correct.
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
