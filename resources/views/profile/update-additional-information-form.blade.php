<x-form-section submit="updateAdditionalInformation">
    <x-slot name="title">
        {{ __('Additional Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s additional profile information.') }}
    </x-slot>

    <x-slot name="form">

        <!-- Phone -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="jurusan" value="{{ __('Jurusan') }}" />
            <x-input id="jurusan" type="text" class="mt-1 block w-full" wire:model.defer="state.jurusan" />
            <x-input-error for="jurusan" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="instagram_account" value="{{ __('Akun Instagram') }}" />
            <x-input id="instagram_account" type="text" class="mt-1 block w-full" wire:model.defer="state.instagram_account" />
            <x-input-error for="instagram_account" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
