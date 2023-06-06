<x-wireui.modal.card align="center" title="Create Message" blur="sm" wire:model.defer="showModal">
    <div class="grid grid-cols-1 gap-4">
        @if($isSelectDisabled)
            <x-input
                type="hidden"
                wire:model="receiverOneId"
                disabled
            />
            <x-wireui.select
                label="Search a User"
                value="{{ $receiverOneId }}"
                placeholder="Select some user"
                :async-data="route('users.index')"
                option-label="name"
                option-value="id"
                disabled
            />
        @else
            <x-wireui.select
                label="Search a User"
                wire:model="receiver"
                placeholder="Select some user"
                :async-data="route('users.index')"
                option-label="name"
                option-value="id"
            />
        @endif
        <x-wireui.input wire:model.defer="subject" label="Subject" placeholder="Subject" />

        <div class="col-span-1">
            <x-wireui.textarea wire:model.defer="messageBody" label="Message" placeholder="Write something here..." />
        </div>

    </div>

    <x-slot name="footer">
            <div class="flex justify-end gap-2">
                <x-wireui.button flat label="Cancel" x-on:click="close" />
                <x-wireui.button primary label="Send" wire:click="sendMessage" />
            </div>
    </x-slot>
</x-wireui.modal.card>

