<x-app-layout>
    <x-title_header>
        <x-slot name="heading">Your Employees</x-slot>
        <x-slot name="icon">
            {!!'<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="icon / users">
            <g id="icon">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6668 2.5C8.90536 2.5 6.66678 4.73858 6.66678 7.5C6.66678 10.2614 8.90536 12.5 11.6668 12.5C14.4282 12.5 16.6668 10.2614 16.6668 7.5C16.6668 4.73858 14.4282 2.5 11.6668 2.5ZM8.33345 7.5C8.33345 5.65905 9.82583 4.16667 11.6668 4.16667C13.5077 4.16667 15.0001 5.65905 15.0001 7.5C15.0001 9.34095 13.5077 10.8333 11.6668 10.8333C9.82583 10.8333 8.33345 9.34095 8.33345 7.5Z" fill="#200E3A"/>
            <path d="M6.79628 17.106C6.55364 17.4971 6.03991 17.6174 5.64883 17.3748C5.25775 17.1321 5.13741 16.6184 5.38005 16.2273C6.52122 14.388 8.85578 12.5 11.6668 12.5C14.4778 12.5 16.8124 14.388 17.9535 16.2273C18.1962 16.6184 18.0758 17.1321 17.6848 17.3748C17.2937 17.6174 16.7799 17.4971 16.5373 17.106C15.6022 15.5988 13.7371 14.1667 11.6668 14.1667C9.59651 14.1667 7.73141 15.5988 6.79628 17.106Z" fill="#200E3A"/>
            <path d="M6.58166 5.46643C6.7843 5.87966 6.61358 6.37891 6.20035 6.58155C5.44313 6.95287 5.00011 7.62649 5.00011 8.33333C5.00011 9.04017 5.44313 9.7138 6.20035 10.0851C6.61358 10.2878 6.7843 10.787 6.58166 11.2002C6.37903 11.6135 5.87977 11.7842 5.46654 11.5815C4.23587 10.9781 3.33345 9.77794 3.33345 8.33333C3.33345 6.88872 4.23587 5.6886 5.46654 5.08512C5.87977 4.88248 6.37903 5.0532 6.58166 5.46643Z" fill="#200E3A"/>
            <path d="M3.46295 17.106C3.22031 17.4971 2.70658 17.6174 2.3155 17.3748C1.92442 17.1321 1.80408 16.6184 2.04672 16.2273C2.5293 15.4495 3.30141 14.8003 4.16281 14.2966C4.56011 14.0643 5.07052 14.198 5.30283 14.5953C5.53515 14.9926 5.40141 15.503 5.00411 15.7354C4.28435 16.1562 3.75479 16.6356 3.46295 17.106Z" fill="#200E3A"/>
            </g>
            </g>
            </svg>
            '!!}
        </x-slot>
    </x-title_header>

    <!--Necessary Buttons-->

    <!--Table-->
    <div class = "w-full h-full p-2">
        <table class = "table-fixed border-b-2">
            <thead>
                <tr class = "border-b-2">
                    <th class = "w-[150px] h-[30px] p-3 justify-start">Employee Id</th>
                    <th class = "w-[200px] h-[30px] p-3 justify-start">Employee Name</th>
                    <th class = "w-[250px] h-[30px] p-3 justify-start">Division</th>
                    <th class = "w-[250px] h-[30px] p-3 justify-start">Position</th>
                    <th class = "w-[200px] h-[30px] p-3 justify-start">Contact Number</th>
                    <th class = "w-[200px] h-[30px] p-3 justify-start">Email</th>
                    <th class = "w-[200px] h-[30px] p-3 justify-start">Status</th>
                    <th class = "w-[200px] h-[30px] p-3 justify-start">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($aphso_employees as $employee)
                <tr class = "border-b-2">

                    <td class = "w-[150px] h-[45px] p-3 justify-start">{{$employee->divisions->abbreviation}}-{{$employee->employee_number}}</td>
                    <td class = "w-[200px] h-[45px] p-3 justify-start">{{$employee->fname}} {{$employee->mname}} {{$employee->lname}} </td>
                    <td class = "w-[250px] h-[45px] p-3 justify-start">{{$employee->divisions->division_name}}</td>
                    <td class = "w-[250px] h-[45px] p-3 justify-start">{{$employee->position}}</td>
                    <td class = "w-[200px] h-[45px] p-3 justify-start">{{$employee->contact_nos}}</td>
                    <td class = "w-[200px] h-[45px] p-3 justify-start">{{$employee->email}}</td>
                    <td class = "w-[200px] h-[45px] p-3 justify-start">{{$employee->emp_status}}</td>
                    <td class = "w-[200px] h-[45px] p-3 justify-start"></td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
