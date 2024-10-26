<x-modal name="add-new-employee" focusable>
    <form action="POST" action = "{{route('employees.add')}}" class = "p-6">
        @csrf

        <x-primary-button>
            <x-slot name="name">Add New Employee</x-slot>
        </x-primary-button>
    </form>
</x-modal>
