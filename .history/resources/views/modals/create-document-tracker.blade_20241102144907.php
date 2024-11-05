<x-modal name="create-document-tracker-request" :show="false" focusable>
    <form x-data="{formStep: 1}" class="space-y-2" action="#" method="POST" enctype="multipart/form-data">
        <button x-cloak x-show="formStep > 1" @click="formStep -= 1" type="button" class="underline">Back</button>

        <!-- Step 1: Document Tracker Form -->
        <div x-cloak x-show="formStep === 1">
            <div class="progress-container">
                <div class="custom-progress-bar">
                    <div class="progress-step active">1</div>
                    <div class="progress-step">2</div>
                    <div class="progress-step">3</div>
                </div>
                <div class="progress-meter" id="progressBar1">
                    <div class="progress-meter-fill" style="width: 0%;"></div>
                </div>
                <div class="required-info">
                    <span style="color: red;">*</span> Required Information
                </div>
                <div class="modal-request-title">Document Tracker</div>
            </div>

            <!-- Form Content Centered -->
            <div class="form-content" style="max-width: 853px; margin: auto;">
                <!-- Form Fields -->
                <div class="row-group" style="display: flex; justify-content: space-between;">
                    <div>
                        <label for="sendTo" class="form-label">Send the Document to *</label>
                        <select class="form-control" id="sendTo" style="width: 375px;" required></select>
                    </div>
                    <div>
                        <label for="docType" class="form-label">Document Type *</label>
                        <select class="form-control" id="docType" style="width: 375px;" required></select>
                    </div>
                    <div style="text-align: center;">
                        <label for="urgentCheckbox" class="form-label">Urgent</label>
                        <input type="checkbox" id="urgentCheckbox" style="width: 40px; height: 40px;">
                    </div>
                </div>

                <div class="row-group" style="display: flex; justify-content: space-between; margin-top: 20px;">
                    <div>
                        <label for="division" class="form-label">APHSO Division</label>
                        <input type="text" class="form-control" id="division" style="width: 375px;">
                    </div>
                    <div>
                        <label for="otherDivision" class="form-label">Others: (please specify)</label>
                        <input type="text" class="form-control" id="otherDivision" style="width: 375px;">
                    </div>
                    <div style="text-align: center;">
                        <label for="confidentialCheckbox" class="form-label">Confidential</label>
                        <input type="checkbox" id="confidentialCheckbox" style="width: 40px; height: 40px;">
                    </div>
                </div>

                <div class="new-group" style="margin-top: 20px;">
                    <div>
                        <label for="subject" class="form-label">Subject *</label>
                        <input type="text" class="form-control" id="subject" style="width: 100%;" required>
                    </div>
                    <div style="margin-top: 20px;">
                        <label for="uploadDocument" class="form-label">Upload your document *</label>
                        <input type="file" class="form-control" id="uploadDocument" style="width: 100%;" required>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 2: Request Form -->
        <div x-cloak x-show="formStep === 2">
            Request Form
            <!-- Add content for step 2 here -->
        </div>

        <!-- Step 3: Confirm Details -->
        <div x-cloak x-show="formStep === 3">
            Confirm Details
            <!-- Add content for step 3 here -->
        </div>

        <!-- Navigation Buttons -->
        <div class="modal-footer">
            <button x-cloak x-show="formStep < 3" @click="formStep += 1" type="button" class="underline">Next</button>
            <x-primary-button x-cloak x-show="formStep === 3">
                <x-slot name="name">Send the Document</x-slot>
            </x-primary-button>
        </div>
    </form>
</x-modal>
