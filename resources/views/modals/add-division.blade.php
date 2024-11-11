<!-- Edit Division Modal -->
<x-modal name="editDivisionModal" :maxWidth="'xl'" :show="false" focusable>
    <!-- Modal Header -->
    <h3 class="text-2xl text-center font-bold">Edit APHSO Division</h3>
    <p class="text-center text-sm">Required Fields <span class="text-red-500">*</span></p>
        <form action="{{ route('division.update') }}" method="POST">
            @csrf
            <!-- Name of APHSO Division -->
            <div class="form-group mb-4">
                <x-input-label for="divisionName" :value="__('APHSO Division Name *')"/>
                <x-text-input type="text" class="block mt-1 w-full" id="divisionName" name="division_name" placeholder="Enter division name" required/>
            </div>

            <!-- Division Abbreviation -->
            <div class="form-group mb-4">
                <x-input-label for="divisionAbbreviation" :value="__('Division Abbreviation *')"/>
                <x-text-input type="text" class="block mt-1 w-full" id="divisionAbbreviation" name="division_abbreviation" placeholder="Enter abbreviation" required/>
            </div>

            <!-- Division Head Name -->
            <div class="form-group mb-4">
                <x-input-label for="divisionHead" :value="__('Who will be the head for this Division? *')"/>
                <select class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full mt-1" id="divisionHead" name="division_head" required>
                    <option value="" disabled selected hidden>-- Select Employee Name --</option>
                    @foreach ($employees as $division_head)
                    <option value="{{ $division_head->full_name }}">{{ $division_head->full_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="items-center justify-items-center">
                <x-primary-button>
                    <x-slot name="name">Update Division</x-slot>
                </x-primary-button>
            </div>
        </form>
</x-modal>

<!-- Create New Division Modal -->
<x-modal name="createDivisionModal" :maxWidth="'xl'" :show="false" focusable>
    <h3 class="text-center text-2xl font-bold">Create New Division</h3>
    <p class="text-center text-sm">Required Fields <span class="text-red-500">*</span></p>
        <form action="{{ route('divisions.store') }}" method="POST">
            @csrf
            <!-- Name of APHSO Division -->
            <div class="form-group mb-4">
                <x-input-label for="divisionName" :value="__('APHSO Division Name *')"/>
                <x-text-input type="text" class="block mt-1 w-full" id="divisionName" name="division_name" placeholder="Enter division name" required/>
            </div>

            <!-- Division Abbreviation -->
            <div class="form-group mb-4">
                <x-input-label for="divisionAbbreviation" :value="__('Division Abbreviation *')"/>
                <x-text-input type="text" class="block mt-1 w-full" id="divisionAbbreviation" name="division_abbreviation" placeholder="Enter abbreviation" required/>
            </div>

            <!-- Division Head Name -->
            <div class="form-group mb-4">
                <x-input-label for="divisionHead" :value="__('Who will be the head for this Division? *')"/>
                <select class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full mt-1" id="divisionHead" name="division_head" required>
                    <option value="" disabled selected hidden>-- Select Employee Name --</option>
                    @foreach ($employees as $division_head)
                    <option value="{{ $division_head->full_name }}">{{ $division_head->full_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="items-center justify-items-center">
                <x-primary-button>
                    <x-slot name="name">Create Division</x-slot>
                </x-primary-button>
            </div>
        </form>
</x-modal>
