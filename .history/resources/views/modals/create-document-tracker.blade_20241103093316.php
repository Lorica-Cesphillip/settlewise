<x-modal name="create-document-tracker-request" :show="false" focusable>
    <form x-data="{formStep: 1}" class="space-y-2" action="#" method="POST" enctype="multipart/form-data">
        <button x-cloak x-show="formStep > 1" @click="formStep -= 1" type="button" class="underline">Back</button>
    </form>
</x-modal>
