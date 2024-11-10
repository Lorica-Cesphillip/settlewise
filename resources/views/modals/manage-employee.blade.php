<x-modal name="view-employee" :maxWidth="'3xl'">
    <div x-data="employeeData" @open-modal.window="if($event.detail.name === 'view-employee') {
        fetchEmployeeData($event.detail.employeeNumber);
        show=true;
    }">
        <h3 class="font-bold text-center text-2xl pb-4">View Employee Information</h3>
        <hr class="border-gray-400">

        <div class="flex flex-row pt-4">
            <div class="basis-3/4">
                <div class="flex flex-row">
                    <div class="basis-1/4">
                        <p class="font-light">Employee Name: </p>
                        <p class="font-light">Home Address: </p>
                        <p class="font-light">Birthdate: </p>
                        <p class="font-light">Marital Status: </p>
                        <p class="font-light">Email: </p>
                        <p class="font-light">Contact Number: </p>
                        <p class="font-light">APHSO Division: </p>
                        <p class="font-light">Position: </p>
                    </div>
                    <div class="basis-3/4">
                        <p class="font-bold underline"><span x-text="`${lname}, ${fname} ${mname}`"></span></p>
                        <p class="font-bold underline" x-text="address"></p>
                        <p class="font-bold underline" x-text="birthdate"></p>
                        <p class="font-bold underline" x-text="marital_status"></p>
                        <p class="font-bold underline" x-text="email"></p>
                        <p class="font-bold underline" x-text="contact_nos"></p>
                        <p class="font-bold underline" x-text="division"></p>
                        <p class="font-bold underline" x-text="position"></p>
                    </div>
                </div>
            </div>
            <div class="basis-1/4">
                <div class="items-center justify-items-center w-[200px] h-[200px] bg-gray-200"></div>
                <p class="text-center underline pt-3">Your Employee's Picture</p>
            </div>
        </div>

        <div class="w-full justify-between inline-flex pt-3">
            <x-tertiary-button x-on:click.prevent="$dispatch('close-modal', 'view-employee')">
                <x-slot name="name">Close</x-slot>
                <!-- SVG icon omitted for brevity -->
            </x-tertiary-button>
            <button x-on:click.prevent="$dispatch('open-modal', 'edit-employee')"
                class="p-4 bg-[#0d5dba] rounded-lg inline-flex justify-center items-center gap-2.5 text-white tracking-widest hover:bg-blue-900">
                Edit
            </button>
        </div>
    </div>
</x-modal>

<script>
    function employeeData() {
        return {
            lname: '',
            fname: '',
            mname: '',
            address: '',
            birthdate: '',
            marital_status: '',
            email: '',
            contact_nos: '',
            division: '',
            position: '',
            async fetchEmployeeData(employeeNumber) {
                try {
                    const response = await fetch(`/employees/${employeeNumber}`);

                    if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);

                    // Read JSON data only once and assign it to a variable
                    const data = await response.json();
                    console.log("Employee data:", data);  // Log JSON to verify its structure

                    // Update Alpine.js properties with the response data
                    this.lname = data.lname;
                    this.fname = data.fname;
                    this.mname = data.mname;
                    this.address = data.address;
                    this.birthdate = data.birthdate;
                    this.marital_status = data.marital_status;
                    this.email = data.email;
                    this.contact_nos = data.contact_nos;
                    this.division = data.division.name;
                    this.position = data.position;
                } catch (error) {
                    console.error('Error fetching employee data:', error);
                }
            }

        };
    }
</script>
