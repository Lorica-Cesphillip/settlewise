<x-modal name="add-new-employee" :show="true" focusable>
    <div class = "pt-10 pb-4">
        <h3 class = "text-center font-bold text-2xl">Add New Employee</h3>
        <form action="{{route('employees.add')}}" method = "POST" class = "p-4">
            <h5 class = "font-bold text-xl">Part I: Personal Information</h5>
            <div class = "block">

                <!--Employee Name-->
                <x-input-label for="name" :value="__('Employee Name')"/>
                <div class = "inline-flex columns-3 gap-2">
                    <div>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')" autofocus autocomplete="off" placeholder="Last Name" />
                        <x-input-error :messages="$errors->get('lname')" class="mt-2" />
                    </div>

                    <div>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')" autofocus autocomplete="off" placeholder="First Name" />
                        <x-input-error :messages="$errors->get('fname')" class="mt-2" />
                    </div>

                    <div>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="mname" :value="old('mname')" autofocus autocomplete="off" placeholder="Middle Name" />
                        <x-input-error :messages="$errors->get('mname')" class="mt-2" />
                    </div>
                </div>

                <!--Home Address-->
                <div class = "block">
                    <x-input-label for="address" :value="__('Home Address')"/>
                    <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" autofocus autocomplete="off" placeholder="Lot/Blg. No, Street, Barangay/ Subdivision, Municipality/City, Province, ZIP Code" />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>
            </div>

            <div class = "block">

            </div>
        </form>
    </div>
</x-modal>
