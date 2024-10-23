<x-app-layout>
    <!--Respective Buttons-->
    <x-title_header>
        <x-slot name="heading">Archived Documents</x-slot>
        <x-slot name="icon">
            {!!'<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="icon / box-1">
                    <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                        d="M4.16675 2.08331C2.78604 2.08331 1.66675 3.2026 1.66675 4.58331V6.24998C1.66675 6.86688 2.00191 7.4055 2.50008 7.69368V14.5833C2.50008 16.4243 3.99247 17.9166 5.83341 17.9166H14.1667C16.0077 17.9166 17.5001 16.4243 17.5001 14.5833V7.69368C17.9982 7.4055 18.3334 6.86688 18.3334 6.24998V4.58331C18.3334 3.2026 17.2141 2.08331 15.8334 2.08331H4.16675ZM5.83341 16.25C4.91294 16.25 4.16675 15.5038 4.16675 14.5833V7.91665H15.8334V14.5833C15.8334 15.5038 15.0872 16.25 14.1667 16.25H5.83341ZM15.8334 3.74998C16.2937 3.74998 16.6667 4.12308 16.6667 4.58331V6.24998H3.33341V4.58331C3.33341 4.12308 3.70651 3.74998 4.16675 3.74998H15.8334Z"
                        fill="#200E3A" />
                </g>
            </svg>
            '
            !!}
        </x-slot>
    </x-title_header>
    <!--Main Table-->
    <table class = "table-fixed">
        <thead>
            <tr>
                <th class = "p-3 justify-start border-b-2 w-[178px] h-[45px]">Tracking Code</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[45px]">Sender/Receiver</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[45px]">Division</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[45px]">Document Type</th>
                <th class = "p-3 justify-start border-b-2 w-[538px] h-[45px]">Subject</th>
                <th class = "p-3 justify-start border-b-2 w-[169px] h-[45px]">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class = "p-3 justify-start border-b-2 w-[178px] h-[73px]">11112025-001</td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Juan Dela Cruz</td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Administrative Division</td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Office Order</td>
                <td class = "p-3 justify-start border-b-2 w-[538px] h-[73px]">Subject</td>
                <td class = "p-3 justify-start border-b-2 w-[169px] h-[73px]">
                    <a href="#" class="text-blue-500 hover:text-blue-700 p-2">
                        View
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</x-app-layout>
