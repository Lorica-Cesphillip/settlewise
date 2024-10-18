<x-app-layout>
    <h1>Your Employees</h1>
    <div class="w-full h-14 relative">
        <x-primary-button
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'add-new-employee')"
        >
            <div class="justify-center items-center gap-2 inline-flex">
                <div class="text-center text-white text-xl font-semibold leading-normal">Add New Employee</div>
            </div>
        </x-primary-button>
        <div class="h-14 left-[1362px] top-0 absolute flex-col justify-start items-start inline-flex">
            <x-secondary-button>
                <div class="justify-center items-center gap-2 inline-flex">
                    <div class="w-6 h-6 relative"></div>
                    <div class="text-center text-base text-black font-semibold leading-normal">Refresh</div>
                </div>
            </x-secondary-button>
        </div>
        <!--Add New Employee-->
        @include('documents.forms.add_employee')

        <!--Search Bar-->
        <form class="w-[515px] h-14 left-0 top-0 absolute">
            <x-text-input  id="search_employee" class="w-[375px] h-14 left-0 top-0 absolute flex-col justify-start items-start gap-2 inline-flex mt-1" name="search_employee" :value="old('search_employee')" autofocus>
                <div class="self-stretch h-14 flex-col justify-start items-start gap-1 flex">
                    <div class="self-stretch h-14 p-4 bg-white rounded-md border border-[#d0d4dd] justify-start items-center gap-3 inline-flex">
                        <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                            <div class="w-5 h-5 relative"></div>
                                <div class="justify-start items-center gap-0.5 flex">
                                </div>
                            </div>
                        </div>
                    </div>
                </x-text-input>
                <div class="h-14 left-[396px] top-0 absolute flex-col justify-start items-start inline-flex">
                <x-primary-button>
                    <div class="justify-center items-center gap-2 inline-flex">
                        <div class="text-center text-white text-base font-semibold leading-normal">Search</div>
                        <div class="w-6 h-6 relative"></div>
                    </div>
                </x-primary-button>
            </div>
        </form>
    </div>
    <table class = "table-fixed">
        <thead>
            <tr>
                <th class = "p-3 justify-start border-b-2 w-[173px] h-[73px]">Employee Id</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Employee Name</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Division</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Position</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Contact Number</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Email</th>
                <th class = "p-3 justify-start border-b-2 w-[138px] h-[73px]">Status</th>
                <th class = "p-3 justify-start border-b-2 w-[169px] h-[73px]">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aphso_employees as $employee)
            <tr>
                <td class = "p-3 justify-start border-b-2 w-[173px] h-[73px]">{{$employee->divisions->abbreviation}}-{{str_pad($employee->employee_number, 4, '0', STR_PAD_LEFT)}}</td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">{{$employee->fname}} {{$employee->mname}} {{$employee->lname}}</td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">{{$employee->divisions->division_name}}</td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">{{$employee->position}}</td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">{{$employee->contact_nos}}</td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">{{$employee->email}}</td>
                <td class = "p-3 justify-start border-b-2 w-[138px] h-[73px]">
                    <div class="h-6 px-3 py-0.5 bg-[#ffece5] rounded-xl flex-col justify-center items-center gap-2 inline-flex">
                        <div class="justify-center items-center gap-0.5 inline-flex">
                            <div class="text-center text-[#ad3306] text-sm font-medium leading-tight">{{$employee->status == 1 ? 'In Service' : 'Archived' }}</div>
                        </div>
                    </div>
                </td>
                <td class = "p-3 justify-start border-b-2 w-[169px] h-[73px]">
                    <a href="{{ route('employees.edit', $employee->employee_number) }}" class="text-blue-500 hover:text-blue-700 p-2">
                        View
                    </a>
                    <form action="{{ route('employees.destroy', $employee->employee_number) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700 p-2">
                            Archive
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$aphso_employees->links()}}
</x-app-layout>
