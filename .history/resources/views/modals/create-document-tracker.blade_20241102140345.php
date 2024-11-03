<x-modal name="create-document-tracker-request" :show="false" focusable>
    <form x-data="{formStep: 1}" class = "space-y-2" action="#" method = "POST">
        <button x-cloak x-show="formStep > 1" @click="formStep -= 1" type = "button" class = "underline">Back</button>

        <!--Main Form-->
        <div x-cloak x-show="formStep === 1">Document Tracker Form</div>
        <div x-cloak x-show="formStep === 2">Request Form</div>
        <div x-cloak x-show="formStep === 3">Confirm Details</div>

        <button x-cloak x-show="formStep < 3" @click="formStep += 1" type="button" class = "underline">
            Next
        </button>

        <x-primary-button x-cloak x-show="formStep === 3"><x-slot name="name">Send the Document</x-slot></x-primary-button>
    </form>
</x-modal>
