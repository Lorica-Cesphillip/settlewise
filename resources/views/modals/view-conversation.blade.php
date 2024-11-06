<!-- Chat Modal -->
<x-modal name="document-conversation" :maxWidth="'3xl'" :show="false" focusable>
    <div class="h-[600px]">
        <!-- Chat Header with User Info -->
        <div class="py-3">
            <div class="inline-flex w-full gap-3">
                <img src="https://via.placeholder.com/40x40" alt="Profile Picture" class="w-10 h-10 rounded-full">
                <div>
                    <div class="font-bold underline">Juan Dela Cruz</div>
                    <div class="font-light text-sm">Administrative Division</div>
                </div>
            </div>

            <hr class="py-3">
        </div>

        <!-- Chat Body -->
        <div>
            <!-- Chatmate's Message (Left Aligned) -->
            <div class="justify-items-start gap-4 inline-flex">
                <div class="bg-blue-500 w-[350px] shadow-md py-2 px-4 rounded-lg text-white">
                    <p>Hello, I have some questions about the document.</p>
                </div>
            </div>
            <p class="text-sm">Received • 12:01 PM</p>

            <!-- User's Message (Right Aligned) -->
            <div class="justify-items-end">
                <div class="bg-gray-300 w-[350px] shadow-md py-2 px-4 rounded-md">
                    <p>Sure, what would you like to know?</p>
                </div>
                <small class="chat-name-timestamp">You • 12:02 PM</small>
            </div>
        </div>


        <!-- Message Input -->
        <form action="#" method="POST" class="inline-flex gap-2 w-[680px] bottom-10 absolute pt-4">
            @csrf
            <x-text-input type="text" class="w-full mt-1" name="reply" placeholder="Type a message"
                style="width: 100%;" />
            <x-primary-button>
                <x-slot name="name">Send</x-slot>
                <x-slot name="icon">
                    <svg width="24" height="24" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="icon / send">
                            <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                                d="M16.9747 11.8999C18.6126 11.1628 18.6126 8.83724 16.9747 8.1002L5.19204 2.798C3.60512 2.08388 1.89392 3.51487 2.31598 5.20311L3.13604 8.48334C3.32524 9.24014 3.91689 9.81693 4.65478 10C3.91689 10.1831 3.32524 10.7599 3.13604 11.5167L2.31598 14.797C1.89392 16.4852 3.60511 17.9162 5.19204 17.2021L16.9747 11.8999ZM4.5081 4.31786L14.9777 9.02917L5.13034 8.39386C4.94948 8.38219 4.7969 8.25495 4.75294 8.07912L3.93289 4.79889C3.84848 4.46124 4.19071 4.17504 4.5081 4.31786ZM5.13034 11.6062L14.9777 10.9709L4.5081 15.6822C4.19071 15.825 3.84847 15.5388 3.93289 15.2012L4.75294 11.921C4.7969 11.7451 4.94948 11.6179 5.13034 11.6062Z"
                                fill="white" />
                        </g>
                    </svg>
                </x-slot>
            </x-primary-button>
        </form>
    </div>
</x-modal>
