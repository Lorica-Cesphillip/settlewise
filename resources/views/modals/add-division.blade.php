<head>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS, jQuery, and Popper.js (necessary for modal functionality) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<!-- Edit Division Modal -->
<div class="modal fade" id="editDivisionModal" tabindex="-1" role="dialog" aria-labelledby="editDivisionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document" style="max-width: 600px;">
        <div class="modal-content" style="border-radius: 1rem;">
            <!-- Modal Header -->
            <div class="modal-header" style="padding: 1.5rem; border-bottom: none !important;">
                <h5 class="modal-title" id="editDivisionModalLabel" style="font-size: 2rem; text-align: center; width: 100%;">Edit Division</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body" style="padding: 2rem; font-size: 1.2rem;">
                <form action="{{ route('division.update') }}" method="POST">
                    @csrf
                    <!-- Name of APHSO Division -->
                    <div class="form-group mb-4">
                        <label for="divisionName" style="font-size: 1.3rem;">Name of APHSO Division<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="divisionName" name="division_name" placeholder="Enter division name" required style="font-size: 1.2rem; padding: 1.1rem;">
                    </div>

                    <!-- Division Abbreviation -->
                    <div class="form-group mb-4">
                        <label for="divisionAbbreviation" style="font-size: 1.3rem;">Division Abbreviation<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="divisionAbbreviation" name="division_abbreviation" placeholder="Enter abbreviation" required style="font-size: 1.2rem; padding: 1.1rem;">
                    </div>

                    <!-- Division Head Name -->
                    <div class="form-group mb-4">
                        <label for="divisionHead" style="font-size: 1.3rem;">Division Head Name</label>
                        <select class="form-control" id="divisionHead" name="division_head" required>
                            <option value="" disabled selected hidden>-- Select Employee Name --</option>
                            <option value="">Engr. Gina Paz Sipin</option>
                            <option value="">John Doe</option>
                            <option value="">Juan Dela Cruz</option>
                            <option value="">Andres Aguinaldo</option>
                            <!-- Populate dynamically from backend if necessary. . . -->
                        </select>
                    </div>

                    <!-- Submit Button - Centered -->
                    <div class="text-center">
                        <button type="submit" class="btn" style="background-color: midnightblue; color: white; padding: 1rem 2rem; font-size: 1.3rem; border-radius: 0.7rem;">Update Division</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Create New Division Modal -->
<div class="modal fade" id="createDivisionModal" tabindex="-1" role="dialog" aria-labelledby="createDivisionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document" style="max-width: 600px;">
        <div class="modal-content" style="border-radius: 1rem;">
            <!-- Modal Header -->
            <div class="modal-header d-flex justify-content-center" style="padding: 1.5rem; border-bottom: none !important;">
                <h5 class="modal-title" id="createDivisionModalLabel" style="font-size: 2rem; text-align: center; width: 100%;">Create New Division</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body" style="padding: 2rem; font-size: 1.2rem;">
                <form action="{{ route('division.store') }}" method="POST">
                    @csrf
                    <!-- Name of APHSO Division -->
                    <div class="form-group mb-4">
                        <label for="newDivisionName" style="font-size: 1.3rem;">Name of APHSO Division<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="newDivisionName" name="division_name" placeholder="Enter division name" required style="font-size: 1.2rem; padding: 1.1rem;">
                    </div>

                    <!-- Division Abbreviation -->
                    <div class="form-group mb-4">
                        <label for="newDivisionAbbreviation" style="font-size: 1.3rem;">Division Abbreviation<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="newDivisionAbbreviation" name="division_abbreviation" placeholder="Enter abbreviation" required style="font-size: 1.2rem; padding: 1.1rem;">
                    </div>

                    <!-- Division Head Name -->
                    <div class="form-group mb-4">
                        <label for="newDivisionHead" style="font-size: 1.3rem;">Division Head Name</label>
                        <select class="form-control" id="newDivisionHead" name="division_head" required>
                            <option value="" disabled selected hidden>-- Select Employee Name --</option>
                            <option value="">Engr. Gina Paz Sipin</option>
                            <option value="">John Doe</option>
                            <option value="">Juan Dela Cruz</option>
                            <option value="">Andres Aguinaldo</option>
                            <!-- Populate dynamically from backend if necessary. . . -->
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn" style="background-color: midnightblue; color: white; padding: 1rem 2rem; font-size: 1.3rem; border-radius: 0.7rem;">Create Division</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</body>