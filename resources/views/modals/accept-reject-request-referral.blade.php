    <!-- Reject Request Modal -->
    <x-modal name="reject-request" :maxWidth="'2xl'" :show="false" focusable>
        <div class="modal-dialog modal-dialog-centered" style="max-width: 717px; height: 400px;">
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
                        <!-- PLACEHOLDER OPTIONS -->
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
</x-modal>

        <!-- Accept Request Modal -->
<x-modal name="accept-request" :maxWidth="'2xl'" :show="false" focusable>
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
</x-modal>
