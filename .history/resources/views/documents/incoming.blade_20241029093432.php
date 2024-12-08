<x-app-layout>
    <x-title_header>
        <x-slot name="heading">Incoming Documents</x-slot>
        <x-slot name="icon">
            {!! '<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="icon / receipt">
                        <g id="icon">
                        <path d="M6.66667 5.00004C6.20643 5.00004 5.83333 5.37314 5.83333 5.83337C5.83333 6.29361 6.20643 6.66671 6.66667 6.66671H13.3333C13.7936 6.66671 14.1667 6.29361 14.1667 5.83337C14.1667 5.37314 13.7936 5.00004 13.3333 5.00004H6.66667Z" fill="#200E3A"/>
                        <path d="M5.83333 10C5.83333 9.5398 6.20643 9.16671 6.66667 9.16671H13.3333C13.7936 9.16671 14.1667 9.5398 14.1667 10C14.1667 10.4603 13.7936 10.8334 13.3333 10.8334H6.66667C6.20643 10.8334 5.83333 10.4603 5.83333 10Z" fill="#200E3A"/>
                        <path d="M6.66667 13.3334C6.20643 13.3334 5.83333 13.7065 5.83333 14.1667C5.83333 14.6269 6.20643 15 6.66667 15H8.88889C9.34913 15 9.72222 14.6269 9.72222 14.1667C9.72222 13.7065 9.34913 13.3334 8.88889 13.3334H6.66667Z" fill="#200E3A"/>
                        <path d="M11.1111 13.3334C10.6509 13.3334 10.2778 13.7065 10.2778 14.1667C10.2778 14.6269 10.6509 15 11.1111 15H13.3333C13.7936 15 14.1667 14.6269 14.1667 14.1667C14.1667 13.7065 13.7936 13.3334 13.3333 13.3334H11.1111Z" fill="#200E3A"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9015 18.2511C12.9952 18.2745 13.0861 18.3081 13.1724 18.3513C15.1607 19.3454 17.5 17.8996 17.5 15.6767V4.16671C17.5 2.32576 16.0076 0.833374 14.1667 0.833374H5.83333C3.99238 0.833374 2.5 2.32576 2.5 4.16671V15.6767C2.5 17.8996 4.83933 19.3454 6.82757 18.3513C6.91395 18.3081 7.00479 18.2745 7.09848 18.2511L9.59577 17.6267C9.86117 17.5604 10.1388 17.5604 10.4042 17.6267L12.9015 18.2511ZM4.16667 4.16671C4.16667 3.24623 4.91286 2.50004 5.83333 2.50004H14.1667C15.0871 2.50004 15.8333 3.24623 15.8333 4.16671V15.6767C15.8333 16.6606 14.7979 17.3006 13.9178 16.8606C13.7226 16.763 13.5174 16.6871 13.3057 16.6342L10.8085 16.0098C10.2777 15.8771 9.72235 15.8771 9.19155 16.0098L6.69426 16.6342C6.48259 16.6871 6.27736 16.763 6.08221 16.8606C5.20214 17.3006 4.16667 16.6606 4.16667 15.6767V4.16671Z" fill="#200E3A"/>
                        </g>
                        </g>
                        </svg>
                        ' !!}
        </x-slot>
    </x-title_header>

    <!--Necessary Buttons-->
    <div class = "w-full flex row-span-3 h-20 justify-between columns-2">
        <div class = "left-0 h-14 inline-flex gap-3 w-1/2">
            <!--Search Document-->
            <form action="#" method = "POST" class = "inline-flex gap-3">
                <x-text-input id="tracking_code" class="mt-1 w-3/5 gap-3" type="text" name="employee_id"
                    :value="old('tracking_code')" autofocus placeholder="Search Document" />
                <x-primary-button class="gap-3">
                    <x-slot name="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="button-icon">
                                <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C13.125 20 15.078 19.2635 16.6177 18.0319L20.2929 21.7071C20.6834 22.0976 21.3166 22.0976 21.7071 21.7071C22.0976 21.3166 22.0976 20.6834 21.7071 20.2929L18.0319 16.6177C19.2635 15.078 20 13.125 20 11C20 6.02944 15.9706 2 11 2ZM4 11C4 7.13401 7.13401 4 11 4C14.866 4 18 7.13401 18 11C18 14.866 14.866 18 11 18C7.13401 18 4 14.866 4 11Z"
                                    fill="white" />
                            </g>
                        </svg>
                    </x-slot>
                    <x-slot name="name">Search</x-slot>
                </x-primary-button>
            </form>

            <!--Filter Confidential Documents-->
            <form action="#" method = "POST" class = "inline-flex gap-3">
                <div class="block mt-4 gap-3">
                    <label for="filter_confidential" class="inline-flex items-center">
                        <input id="filter_confidential" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Confidential') }}</span>
                    </label>
                </div>
            </form>
        </div>

        <div class = "w-10/12 inline-flex h-14 gap-3">
            <!--Reports Generation-->
            <form class = "inline-flex gap-3" action = "#" method = "POST">
                <x-input-label>From: </x-input-label>
                <input type = "date" name = "from" id = "from" class = "p-3 rounded-md">
                <x-input-label>To: </x-input-label>
                <input type = "date" name = "to" id = "to" class = "p-3 rounded-md">
                <x-primary-button>
                    <x-slot name="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="button-icon">
                                <g id="icon">
                                    <path
                                        d="M16.7071 13.7071L12.7071 17.7071C12.3166 18.0976 11.6834 18.0976 11.2929 17.7071L7.29289 13.7071C6.90237 13.3166 6.90237 12.6834 7.29289 12.2929C7.68342 11.9024 8.31658 11.9024 8.70711 12.2929L11 14.5858V3C11 2.44771 11.4477 2 12 2C12.5523 2 13 2.44771 13 3V14.5858L15.2929 12.2929C15.6834 11.9024 16.3166 11.9024 16.7071 12.2929C17.0976 12.6834 17.0976 13.3166 16.7071 13.7071Z"
                                        fill="white" />
                                    <path
                                        d="M4 17.5C4 16.9477 3.55228 16.5 3 16.5C2.44772 16.5 2 16.9477 2 17.5V19C2 21.2091 3.79086 23 6 23H18C20.2091 23 22 21.2091 22 19V17.5C22 16.9477 21.5523 16.5 21 16.5C20.4477 16.5 20 16.9477 20 17.5V19C20 20.1046 19.1046 21 18 21H6C4.89543 21 4 20.1046 4 19V17.5Z"
                                        fill="white" />
                                </g>
                            </g>
                        </svg>
                    </x-slot>
                    <x-slot name="name">Export</x-slot>
                </x-primary-button>
            </form>
            <!--Add New Employee and Refresh Buttons-->
            <div class = "inline-flex gap-3">
                <x-secondary-button>
                    <x-slot name="icon">
                        {!! '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="button-icon">
                        <g id="icon">
                        <path d="M17 4C17 3.44772 17.4477 3 18 3C18.5523 3 19 3.44772 19 4V7.2C19 7.75229 18.5523 8.2 18 8.2H14.8884C14.3362 8.2 13.8884 7.75229 13.8884 7.2C13.8884 6.64772 14.3362 6.2 14.8884 6.2H15.5735C14.4881 5.44066 13.181 5 11.7775 5C8.06078 5 5 8.10723 5 12C5 12.5523 4.55229 13 4 13C3.44772 13 3 12.5523 3 12C3 7.05622 6.9034 3 11.7775 3C13.7372 3 15.5433 3.65852 17 4.76587V4Z" fill="white"/>
                        <path d="M7 20C7 20.5523 6.55228 21 6 21C5.44772 21 5 20.5523 5 20V16.8C5 16.2477 5.44772 15.8 6 15.8H9.11155C9.66384 15.8 10.1116 16.2477 10.1116 16.8C10.1116 17.3523 9.66384 17.8 9.11155 17.8H8.42654C9.5119 18.5593 10.819 19 12.2225 19C15.9392 19 19 15.8928 19 12C19 11.4477 19.4477 11 20 11C20.5523 11 21 11.4477 21 12C21 16.9438 17.0966 21 12.2225 21C10.2628 21 8.45674 20.3415 7 19.2341V20Z" fill="white"/>
                        </g>
                        </g>
                        </svg>
                        ' !!}
                    </x-slot>
                    <x-slot name="name">Refresh</x-slot>
                </x-secondary-button>
            </div>
        </div>
    </div>

    <!--Incoming Document Tables-->
    <table class = "table-fixed border-gray-800">
        <thead>
            <tr class = "bg-slate-200 h-[30px]">
                <th class = "w-[180px] p-2 border-b-2">Document Tracking Code</th>
                <th class = "w-[200px] p-2 border-b-2">Sender</th>
                <th class = "w-[200px] p-2 border-b-2">Division</th>
                <th class = "w-[180px] p-2 border-b-2">Document Type</th>
                <th class = "w-[300px] p-2 border-b-2">Subject</th>
                <th class = "w-[180px] p-2 border-b-2">Status</th>
                <th class = "w-[180px] p-2 border-b-2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class = "border-b-2 h-[40px]">
                <td class = "w-[180px] p-2 border-b-2">01-04-25-001</td>
                <td class = "w-[200px] p-2 border-b-2">Juan Dela Cruz</td>
                <td class = "w-[200px] p-2 border-b-2">Administrative Division</td>
                <td class = "w-[180px] p-2 border-b-2">Office Memorandum</td>
                <td class = "w-[300px] p-2 border-b-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                <th class = "w-[180px] p-2 border-b-2">
                    <div class="grow shrink basis-0 h-6 justify-start items-center gap-3 flex">
                        <div class="px-3 py-0.5 bg-[#ffece5] rounded-xl flex-col justify-center items-center gap-2 inline-flex">
                            <div class="justify-center items-center gap-0.5 inline-flex">
                                <div class="text-center text-[#ad3306] text-sm font-medium leading-tight">Status</div>
                            </div>
                        </div>
                    </div>
                </th>
                <td class = "w-[180px] p-11 inline-flex gap-3">
                    <a href="#">
                        <svg class="h-[30px] w-[30px] gap-2" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="icon / eye">
                                <g id="icon">
                                    <path
                                        d="M3.57891 11.6523C3.81695 12.0462 3.69061 12.5585 3.29671 12.7965C2.90282 13.0346 2.39053 12.9082 2.15249 12.5143C1.81407 11.9544 1.58447 11.4718 1.44946 11.1603C1.25613 10.7143 1.28418 10.2121 1.5197 9.7915C1.87909 9.14973 2.78698 7.66611 4.18616 6.33307C5.58214 5.00308 7.54641 3.75 9.99982 3.75C12.4532 3.75 14.4175 5.00308 15.8135 6.33307C17.2127 7.66611 18.1206 9.14973 18.4799 9.7915C18.7155 10.2121 18.7435 10.7143 18.5502 11.1603C18.4152 11.4718 18.1856 11.9544 17.8472 12.5143C17.6091 12.9082 17.0968 13.0346 16.7029 12.7965C16.309 12.5585 16.1827 12.0462 16.4207 11.6523C16.6929 11.2019 16.8818 10.8124 16.9964 10.5537C16.6582 9.95778 15.8574 8.67693 14.6638 7.53975C13.4309 6.36513 11.8581 5.41667 9.99982 5.41667C8.14153 5.41667 6.56871 6.36513 5.33581 7.53975C4.14221 8.67693 3.34141 9.95778 3.00328 10.5537C3.11784 10.8124 3.30672 11.2019 3.57891 11.6523Z"
                                        fill="#667185" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.99982 6.66667C7.69864 6.66667 5.83316 8.53215 5.83316 10.8333C5.83316 13.1345 7.69864 15 9.99982 15C12.301 15 14.1665 13.1345 14.1665 10.8333C14.1665 8.53215 12.301 6.66667 9.99982 6.66667ZM7.49982 10.8333C7.49982 9.45262 8.61911 8.33333 9.99982 8.33333C11.3805 8.33333 12.4998 9.45262 12.4998 10.8333C12.4998 12.214 11.3805 13.3333 9.99982 13.3333C8.61911 13.3333 7.49982 12.214 7.49982 10.8333Z"
                                        fill="#667185" />
                                </g>
                            </g>
                        </svg>
                    </a>
                    <form action="#" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="textpx-4">
                            <svg class="h-[30px] w-[30px]" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="icon / box-1">
                                    <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.16675 2.08331C2.78604 2.08331 1.66675 3.2026 1.66675 4.58331V6.24998C1.66675 6.86688 2.00191 7.4055 2.50008 7.69368V14.5833C2.50008 16.4243 3.99247 17.9166 5.83341 17.9166H14.1667C16.0077 17.9166 17.5001 16.4243 17.5001 14.5833V7.69368C17.9982 7.4055 18.3334 6.86688 18.3334 6.24998V4.58331C18.3334 3.2026 17.2141 2.08331 15.8334 2.08331H4.16675ZM5.83341 16.25C4.91294 16.25 4.16675 15.5038 4.16675 14.5833V7.91665H15.8334V14.5833C15.8334 15.5038 15.0872 16.25 14.1667 16.25H5.83341ZM15.8334 3.74998C16.2937 3.74998 16.6667 4.12308 16.6667 4.58331V6.24998H3.33341V4.58331C3.33341 4.12308 3.70651 3.74998 4.16675 3.74998H15.8334Z"
                                        fill="#200E3A" />
                                </g>
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</x-app-layout>
