<x-app-layout>
    <table class = "table-fixed">
        <thead>
            <tr>
                <th class = "p-3 justify-start border-b-2 w-[178px] h-[73px]">Tracking Code</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Sender</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Division</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Document Type</th>
                <th class = "p-3 justify-start border-b-2 w-[400px] h-[73px]">Subject</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Status</th>
                <th class = "p-3 justify-start border-b-2 w-[169px] h-[73px]">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class = "p-3 justify-start border-b-2 w-[178px] h-[73px]">1</td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Juan Dela Cruz</td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Administrative Division</td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Office Order</td>
                <td class = "p-3 justify-start border-b-2 w-[400px] h-[73px]">Subject</td>
                <td class = "p-3 justify-start border-b-2 w-[138px] h-[73px]">
                    <div class="h-6 px-3 py-0.5 bg-[#ffece5] rounded-xl flex-col justify-center items-center gap-2 inline-flex">
                        <div class="justify-center items-center gap-0.5 inline-flex">
                            <div class="text-center text-[#ad3306] text-sm font-medium leading-tight">Pending</div>
                        </div>
                    </div>
                </td>
                <td class = "p-3 justify-start border-b-2 w-[169px] h-[73px]">
                    <a href="#" class="text-blue-500 hover:text-blue-700 p-2">
                        View
                    </a>
                    <form action="#" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700 p-2">
                            Archive
                        </button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</x-app-layout>
