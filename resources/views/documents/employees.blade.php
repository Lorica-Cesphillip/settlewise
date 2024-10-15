<x-app-layout>
    <x-title_header>
        Your Employees
    </x-title_header>
    <table class = "table-auto">
        <thead>
            <tr>
                <th>Employee Id</th>
                <th>Employee Name</th>
                <th>Division</th>
                <th>Position</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aphso_employees as $employee)
            <tr>
                <td>{{$employee->divisions->abbreviation}}-{{$employee->employee_number}}</td>
                <td>{{$employee->fname}} {{$employee->mname}} {{$employee->lname}}</td>
                <td>{{$employee->divisions->division_name}}</td>
                <td>{{$employee->position}}</td>
                <td>{{$employee->contact_nos}}</td>
                <td>{{$employee->email}}</td>
                <td>Active</td>
                <td>
                    <div class="w-5 h-5 relative">Icon 1</div>
                    <div class="w-5 h-5 relative">Icon 2</div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$aphso_employees->links()}}
</x-app-layout>
