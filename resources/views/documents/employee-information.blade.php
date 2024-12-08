<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow items-center justify-items-center sm:rounded-lg">
                <h2 class="text-3xl font-bold">Your Profile</h2>
                <div class="items-start columns-2 py-3 justify-items-start w-full">
                    <p class="font-light py-1">Employee Id: <span class="font-bold underline">{{$employee->divisions->abbreviation}}-{{str_pad($employee->employee_number, 4, '0', STR_PAD_LEFT)}}</span></p>
                    <p class="font-light py-1">Full Name: <span class="font-bold underline">{{$employee->fname}} {{$employee->mname}} {{$employee->lname}}</span></p>
                    <p class="font-light py-1">Position: <span class="font-bold underline">{{$employee->position}}</span></p>
                    <p class="font-light py-1">Address: <span class="font-bold underline">{{$employee->address}}</span></p>
                    <p class="font-light py-1">Birthdate: <span class="font-bold underline">{{$employee->birthdate}}</span></p>
                    <p class="font-light py-1">Marital Status: <span class="font-bold underline">{{$employee->martial_status}}</span></p>
                    <p class="font-light py-1">Contact Number: <span class="font-bold underline">{{$employee->contact_nos}}</span></p>
                    <p class="font-light py-1">Personal Email: <span class="font-bold underline">{{$employee->email}}</span></p>
                </div>

                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
