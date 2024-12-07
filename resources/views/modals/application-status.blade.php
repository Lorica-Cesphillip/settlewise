    <!-- Document Successfully Sent Modal -->
    <x-modal name="sent-successfully" :maxWidth="'xl'" :show="false" focusable>
        <div class="items-center justify-items-center">
            <!-- Image in Center -->
            <img src="../images/Approval.png" alt="Document Successfully Sent" class="w-[200px] h-[200px]" />

            <!-- Document Successfully Sent Text -->
            <h3 class="mt-4 text-2xl"><strong>Document Successfully Sent</strong></h3>
            <p class="pb-4">Please wait for some updates on your document.</p>

            <!-- Okay Button -->
            <button x-data = "" type="button"
                class="p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white font-semibold tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                x-on:click.prevent="
                $dispatch('close-modal', 'sent-successfully');
                setTimeout(() => window.location.href = '{{route('outgoing.index')}}', 300);
                ">Okay</button>
        </div>
    </x-modal>

    <x-modal name="sent-failed" :maxWidth="'xl'" :show="false" focusable>
        <div class="items-center justify-items-center">
            <!-- Image in Center -->
            <img src="../images/Cancel.png" alt="Accepted Image" class="w-[200px] h-[200px]" />

            <h3 class="mt-4 text-2xl"><strong>Error While Sending the Document</strong></h3>
            <p class="mb-4">Please try again. If the problem persists, contact IT Support.</p>
            <!-- Okay Button -->
            <button x-data = "" type="button"
                class="p-4 bg-blue-500 rounded-lg flex-col justify-center items-center gap-2.5 flex text-white font-semibold tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-900 focus:ring-offset-2 transition ease-in-out duration-150"
                x-on:click.prevent="
                $dispatch('close-modal', 'sent-failed');
                setTimeout(() => window.location.href = '{{route('outgoing.index')}}', 300);
                ">Okay</button>
        </div>
    </x-modal>

        <!-- Document Successfully Sent Modal -->
        <x-modal name="employee-added-successfully" :maxWidth="'xl'" :show="false" focusable>
            <div class="items-center justify-items-center">
                <!-- Image in Center -->
                <img src="../images/Approval.png" alt="Document Successfully Sent" class="w-[200px] h-[200px]" />

                <!-- Document Successfully Sent Text -->
                <h3 class="mt-4 text-2xl"><strong>Employee Added Successfully</strong></h3>
                <p class="pb-4">Their Employee Number and initial password is now being sent to their personal email.</p>

                <!-- Okay Button -->
                <button x-data = "" type="button"
                    class="p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white font-semibold tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                    x-on:click.prevent="$dispatch('close-modal', 'employee-added-successfully')">Okay</button>
            </div>
        </x-modal>

        <x-modal name="employee-added-failed" :maxWidth="'xl'" :show="false" focusable>
            <div class="items-center justify-items-center">
                <!-- Image in Center -->
                <img src="../images/Cancel.png" alt="Accepted Image" class="w-[200px] h-[200px]" />

                <h3 class="mt-4 text-2xl"><strong>Error While Adding the Employee</strong></h3>
                <p class="mb-4">Please try again. If the problem persists, contact IT Support.</p>
                <!-- Okay Button -->
                <button x-data = "" type="button"
                    class="p-4 bg-blue-500 rounded-lg flex-col justify-center items-center gap-2.5 flex text-white font-semibold tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-900 focus:ring-offset-2 transition ease-in-out duration-150"
                    x-on:click.prevent="$dispatch('close-modal', 'employee-added-failed')">Okay</button>
            </div>
        </x-modal>

    <!-- Request Accepted/Rejected Modals-->
    <!-- Request Rejected Modal -->
    <x-modal name="request-rejected" :maxWidth="'xl'" :show="false" focusable>
        <div class="items-center justify-items-center">
            <img src="../images/Approval.png" alt="Rejected Image" style="width: 200px; height: 200px;" />
            <h3 class="mt-4 text-2xl"><strong>Request Rejected</strong></h3>
            <p class="pb-4">The receiver will be informed.</p>
            <button x-data = "" type="button"
                class="p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white font-semibold tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                x-on:click.prevent="$dispatch('close-modal', 'request-rejected')">Okay</button>
        </div>
    </x-modal>

    <!-- Request Accepted Modal -->
    <x-modal name="request-granted" :maxWidth="'xl'" :show="false" focusable>
        <div class="items-center justify-items-center">
            <img src="../images/Approval.png" alt="Accepted Image" class="h-[200px] w-[200px]" />

            <h3 class="mt-4"><strong>Request Accepted</strong></h3>
            <p class="pb-4">The receiver will be informed.</p>
            <button x-data = "" type="button"
                class="p-4 bg-blue-500 rounded-lg flex-col justify-center items-center gap-2.5 flex text-white font-semibold tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-900 focus:ring-offset-2 transition ease-in-out duration-150"
                x-on:click.prevent="$dispatch('close-modal', 'request-granted')">Okay</button>
        </div>
    </x-modal>

    <x-modal name="error-forwarding-request" :maxWidth="'xl'" :show="false" focusable>
        <div class="items-center justify-items-center">
            <!-- Image in Center -->
            <img src="../images/Cancel.png" alt="Accepted Image" style="width: 200px; height: 200px;" />

            <h3 class="mt-4 text-2xl"><strong>Error While Forwarding the Request</strong></h3>
            <p class="mb-4">Please try again.  If the problem persists, contact IT Support.</p>
            <!-- Okay Button -->
            <button x-data = "" type="button"
                class="p-4 bg-blue-500 rounded-lg flex-col justify-center items-center gap-2.5 flex text-white font-semibold tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-900 focus:ring-offset-2 transition ease-in-out duration-150"
                x-on:click.prevent="$dispatch('close-modal', 'error-forwarding-request')">Okay</button>
        </div>
    </x-modal>

    <x-modal name="error-rejecting-request" :maxWidth="'xl'" :show="false" focusable>
        <div class="items-center justify-items-center">
            <!-- Image in Center -->
            <img src="../images/Cancel.png" alt="Accepted Image" style="width: 200px; height: 200px;" />

            <h3 class="mt-4 text-2xl"><strong>Error While Rejecting the Request</strong></h3>
            <p class="mb-4">Please try again.  If the problem persists, contact IT Support.</p>
            <!-- Okay Button -->
            <button x-data = "" type="button"
                class="p-4 bg-blue-500 rounded-lg flex-col justify-center items-center gap-2.5 flex text-white font-semibold tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-900 focus:ring-offset-2 transition ease-in-out duration-150"
                x-on:click.prevent="$dispatch('close-modal', 'error-rejecting-request')">Okay</button>
        </div>
    </x-modal>

    <!-- Announcement Posted -->
    <x-modal name="announcement-posted" :maxWidth="'xl'" :show="false" focusable>
        <div class="items-center justify-items-center">
            <!-- Image in Center -->
            <img src="../images/Approval.png" alt="Accepted Image" style="width: 200px; height: 200px;" />

            <!-- Document Successfully Sent Text -->
            <h3 class="mt-4 text-2xl"><strong>Announcement Posted</strong></h3>
            <p class="mb-4">Your employees will be notified.</p>
            <!-- Okay Button -->
            <button x-data = "" type="button"
                class="p-4 bg-blue-500 rounded-lg flex-col justify-center items-center gap-2.5 flex text-white font-semibold tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-900 focus:ring-offset-2 transition ease-in-out duration-150"
                x-on:click.prevent="$dispatch('close-modal', 'announcement-posted')">Okay</button>
        </div>

    </x-modal>

    <!-- Announcement ERROR -->
    <x-modal name="error-announcement" :maxWidth="'xl'" :show="false" focusable>
        <div class="items-center justify-items-center">
            <!-- Image in Center -->
            <img src="../images/Cancel.png" alt="Accepted Image" style="width: 200px; height: 200px;" />

            <h3 class="mt-4 text-2xl"><strong>Error While Posting Announcement</strong></h3>
            <p class="mb-4">Please try again.  If the problem persists, contact IT Support.</p>
            <!-- Okay Button -->
            <button x-data = "" type="button"
                class="p-4 bg-blue-500 rounded-lg flex-col justify-center items-center gap-2.5 flex text-white font-semibold tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-900 focus:ring-offset-2 transition ease-in-out duration-150"
                x-on:click.prevent="$dispatch('close-modal', 'error-announcement')">Okay</button>
        </div>
    </x-modal>
