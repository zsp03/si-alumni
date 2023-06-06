<x-wireui.modal wire:model.defer="showModal" align="center">
    <x-wireui.card title="Delete Message">
        <p class="text-gray-600">
            Are you sure you want to delete this message?
        </p>

        <x-slot name="footer">
            <div class="flex justify-end gap-x-4">
                <x-wireui.button flat label="Cancel" x-on:click="close" />
                <x-wireui.button primary label="I Agree" wire:click="deleteThread({{ $thread->id }})"/>
            </div>
        </x-slot>
    </x-wireui.card>
</x-wireui.modal>
