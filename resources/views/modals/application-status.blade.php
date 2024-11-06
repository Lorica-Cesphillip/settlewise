    <!-- Document Successfully Sent Modal -->
<x-modal name="sent-successfully" :maxWidth="'xl'" :show="false" focusable>
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="height: 500px;">
            <div class="modal-body text-center d-flex flex-column justify-content-center align-items-center">
                <!-- Image in Center -->
                <img src="../images/Approval.png" alt="Accepted Image" style="width: 200px; height: 200px;" />

                <!-- Document Successfully Sent Text -->
                <h3 class="mt-4"><strong>Document Successfully Sent</strong></h3>
                <p>Please wait for some updates on your document.</p>
            </div>

            <div class="modal-footer justify-content-center">
                <!-- Okay Button -->
                <button type="button" class="btn btn-active" data-bs-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</x-modal>

<!-- Request Accepted/Rejected Modals-->
<!-- Request Rejected Modal -->
<x-modal name="request-rejected" :maxWidth="'xl'" :show="false" focusable>
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="height: 500px;">
            <div class="modal-body text-center d-flex flex-column justify-content-center align-items-center">
                <img src="../images/Approval.png" alt="Rejected Image" style="width: 200px; height: 200px;" />
                <h3 class="mt-4"><strong>Request Rejected</strong></h3>
                <p>The receiver will be informed.</p>
            </div>

            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-active" data-bs-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</x-modal>

<!-- Request Accepted Modal -->
<x-modal name="requested-granted" :maxWidth="'xl'" :show="false" focusable>
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="height: 500px;">
            <div class="modal-body text-center d-flex flex-column justify-content-center align-items-center">
                <img src="../images/Approval.png" alt="Accepted Image" style="width: 200px; height: 200px;" />

                <h3 class="mt-4"><strong>Request Accepted</strong></h3>
                <p>The receiver will be informed.</p>
            </div>

            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-active" data-bs-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</x-modal>

<!-- Announcement Posted -->
<x-modal name="announcement-posted" :maxWidth="'xl'" :show="false" focusable>
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="height: 500px;">
            <div class="modal-body text-center d-flex flex-column justify-content-center align-items-center">
                <!-- Image in Center -->
                <img src="../images/Approval.png" alt="Accepted Image" style="width: 200px; height: 200px;" />

                <!-- Document Successfully Sent Text -->
                <h3 class="mt-4"><strong>Announcement Posted</strong></h3>
                <p>Your employees will be notified.</p>
            </div>

            <div class="modal-footer justify-content-center">
                <!-- Okay Button -->
                <button type="button" class="btn btn-active" data-bs-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</x-modal>

<!-- Announcement ERROR -->
<x-modal name="requested-granted" :maxWidth="'xl'" :show="false" focusable>
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="height: 500px;">
            <div class="modal-body text-center d-flex flex-column justify-content-center align-items-center">
                <!-- Image in Center -->
                <img src="../images/Cancel.png" alt="Accepted Image" style="width: 200px; height: 200px;" />

                <h3 class="mt-4"><strong>Error While Posting Announcement</strong></h3>
                <p>Please try again.</p>
            </div>

            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-active" data-bs-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</x-modal>

