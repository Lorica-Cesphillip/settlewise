document.addEventListener('DOMContentLoaded', function () {

    // Function to update progress bar and show the next modal
    function updateProgress(step) {
        const steps = document.querySelectorAll('.progress-step');
        const progressFill = document.querySelector('.progress-meter-fill');

        function updateProgressBar(modalId, progressValue) {
            let progressBar;
            
            if (modalId === 'sendDocumentModal1') {
                progressBar = document.getElementById('progressBar1').querySelector('.progress-bar-fill');
            } else if (modalId === 'sendDocumentModal2') {
                progressBar = document.getElementById('progressBar2').querySelector('.progress-bar-fill');
            } else if (modalId === 'sendDocumentModal3') {
                progressBar = document.getElementById('progressBar3').querySelector('.progress-bar-fill');
            }
        
            if (progressBar) {
                progressBar.style.width = progressValue + '%';  // Set progress based on value (0-100)
            }
        }
    }

    // Next Button Click Event for First Modal
    document.querySelector('#nextToModal2').addEventListener('click', function () {
        const firstModal = bootstrap.Modal.getInstance(document.getElementById('sendDocumentModal1'));
        firstModal.hide(); // Hide the first modal

        // Update progress to step 2
        updateProgress(2);

        // Show the second modal
        const secondModal = new bootstrap.Modal(document.getElementById('sendDocumentModal2'));
        secondModal.show();
    });

    // Next Button Click Event for Second Modal
    document.querySelector('#nextToModal3').addEventListener('click', function () {
        const secondModal = bootstrap.Modal.getInstance(document.getElementById('sendDocumentModal2'));
        secondModal.hide(); // Hide the second modal

        // Update progress to step 3
        updateProgress(3);

        // Show the third modal
        const thirdModal = new bootstrap.Modal(document.getElementById('sendDocumentModal3'));
        thirdModal.show();
    });

    // Back Button Click Event for Second Modal
    document.querySelector('#backToModal1').addEventListener('click', function () {
        const secondModal = bootstrap.Modal.getInstance(document.getElementById('sendDocumentModal2'));
        secondModal.hide(); // Hide the second modal

        // Update progress back to step 1
        updateProgress(1);

        // Show the first modal again
        const firstModal = new bootstrap.Modal(document.getElementById('sendDocumentModal1'));
        firstModal.show();
    });

    // Back Button Click Event for Third Modal
    document.querySelector('#backToModal2').addEventListener('click', function () {
        const thirdModal = bootstrap.Modal.getInstance(document.getElementById('sendDocumentModal3'));
        thirdModal.hide(); // Hide the third modal

        // Update progress back to step 2
        updateProgress(2);

        // Show the second modal again
        const secondModal = new bootstrap.Modal(document.getElementById('sendDocumentModal2'));
        secondModal.show();
    });

    // Add the default behavior to close the modal when clicking outside
    document.querySelectorAll('.modal').forEach(modalElement => {
        modalElement.addEventListener('hidden.bs.modal', function () {
            const modalBackdrop = document.querySelector('.modal-backdrop');
        });
    });

    // Submit button event for final modal
    document.querySelector('#sendDocumentFinal').addEventListener('click', function () {
        alert('Document submitted successfully!');
    });

});

document.addEventListener('DOMContentLoaded', function () {
    const requestYes = document.getElementById('requestYes');
    const requestNo = document.getElementById('requestNo');
    
    // Function to toggle form fields
    function toggleFields(isRequesting) {
        const fieldsToToggle = [
            document.getElementById('typeOfRequest'),
            document.getElementById('othersRequest'),
            document.getElementById('documentRequested'),
            document.getElementById('requestPurpose')
        ];

        // Enable or disable fields based on the selected radio button
        fieldsToToggle.forEach(field => {
            field.disabled = !isRequesting;
        });
    }

    // Set initial state based on the default selected radio button
    if (requestYes.checked) {
        toggleFields(true);
    } else if (requestNo.checked) {
        toggleFields(false);
    }

    // Add event listeners for radio button clicks
    requestYes.addEventListener('click', function () {
        toggleFields(true);
    });

    requestNo.addEventListener('click', function () {
        toggleFields(false);
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.getElementById('confirmCheckbox');
    const submitButton = document.getElementById('sendDocumentBtn');

    // Function to toggle the Submit button based on checkbox state
    checkbox.addEventListener('change', function () {
        if (checkbox.checked) {
            submitButton.disabled = false;
            submitButton.classList.remove('btn-disabled');  // Remove disabled style
            submitButton.classList.add('btn-primary');  // Optional: Add primary style
        } else {
            submitButton.disabled = true;
            submitButton.classList.add('btn-disabled');  // Add disabled style
            submitButton.classList.remove('btn-primary');  // Optional: Remove primary style
        }
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.getElementById('confirmReferralCheckbox');
    const forwardButton = document.getElementById('forwardDocumentBtn');

    // Enable/disable Forward Document button based on checkbox
    checkbox.addEventListener('change', function () {
        if (checkbox.checked) {
            forwardButton.disabled = false;
            forwardButton.classList.remove('btn-disabled');
            forwardButton.classList.add('btn-primary');
        } else {
            forwardButton.disabled = true;
            forwardButton.classList.add('btn-disabled');
            forwardButton.classList.remove('btn-primary');
        }
    });
});