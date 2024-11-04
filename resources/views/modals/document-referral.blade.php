<!-- Refer Someone Modal -->
<x-modal name="refer-someone" focusable>
    <h3 class="font-bold text-2xl text-center">DOCUMENT REFERRAL FORM</h3>

    <div class="modal-body">
        <div class = "columns-2">
            <div>
                <p class = "font-light">Tracking Code: </p>
                <p class = "font-light">Document Type: </p>
                <p class = "font-light">Subject: </p>
                <p class = "font-light">Additional Remarks: </p>
                <p class = "font-light">Did the Sender Want to Request Something?</p>
            </div>
            <div>
                <p class = "font-bold underline">01-07-2025-001</p>
                <p class = "font-bold underline">Office Order</p>
                <p class = "font-bold underline">orem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p class = "font-bold underline">orem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p class = "font-bold underline">01-07-2025-001</p>
            </div>
        </div>

        <!-- Full-width Select Employee to be Referred -->
        <div class="full-width-group mt-3">
            <label for="employee-select"><strong>Select Employee to be Referred</strong></label>
            <select id="employee-select" class="form-control full-width-select">
                <!-- PLACEHOLDER OPTIONS -->
                <option value="">-- APHSO Employee --</option>
                @foreach($employees as $employee)
                <option value="{{$employee->employee_number}}">{{$employee->full_name}}</option>
                @endforeach
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
    </x-modal>
