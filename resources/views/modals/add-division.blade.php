<!-- Edit Division Modal -->
<x-modal name="editDivisionModal" id="editDivisionModal" class="modal" x-data="{ open: false }" x-show="open" focusable>
    <!-- Modal Header -->
    <x-slot name="title">
        <h5 class="modal-title" id="editDivisionModalLabel" style="font-size: 2rem; text-align: center; width: 100%;">Edit Division</h5>
    </x-slot>

    <!-- Modal Body -->
    <x-slot name="content">
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
    </x-slot>

    <!-- Modal Footer -->
    <x-slot name="footer">
        <div class="text-center">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
        </div>
    </x-slot>
</x-modal>

<!-- Create New Division Modal -->
<x-modal name="createDivisionModal" id="createDivisionModal" class="modal" :show="false" focusable>
    <!-- Modal Header -->
    <x-slot name="title">
        <h5 class="modal-title" id="createDivisionModalLabel" style="font-size: 2rem; text-align: center; width: 100%;">Create New Division</h5>
    </x-slot>

    <!-- Modal Body -->
    <x-slot name="content">
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
                    <!-- Populate dynamically from backend if necessary. . . .-->
                </select>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn" style="background-color: midnightblue; color: white; padding: 1rem 2rem; font-size: 1.3rem; border-radius: 0.7rem;">Create Division</button>
            </div>
        </form>
    </x-slot>
</x-modal>
<script>
  function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
      modal.style.display = 'block'; // Show the modal
    }
  }

  // Close modal function (you can call this in a close button inside the modal)
  function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
      modal.style.display = 'none'; // Hide the modal
    }
  }
</script>