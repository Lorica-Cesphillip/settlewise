<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-3xl font-bold">Your Profile</h2>
                <div class="items-start columns-2 pt-3 justify-items-start w-full">
                    <p class="font-light py-1">Employee Id: </p>
                    <p class="font-light py-1">Full Name: </p>
                    <p class="font-light py-1">Position: </p>
                    <p class="font-light py-1">Address: </p>
                    <p class="font-light py-1">Birthdate: </p>
                    <p class="font-light py-1">Marital Status: </p>
                    <p class="font-light py-1">Contact Number: </p>
                    <p class="font-light py-1">Personal Email: </p>
                </div>

                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
