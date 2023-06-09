<x-guest-layout>
    @section('title', 'Two-Factor')
    <x-wireui.notifications position="top-left" />
    <div x-data="{ recovery: false }" class="mx-auto mb-0 max-w-md">
        <div class="text-center px-6 max-w-md">
            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
            </div>

            <div class="mb-4 text-sm text-gray-600" x-show="recovery">
                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
            </div>
        </div>

        <div class="flex flex-col gap-2 items-center mt-4">
            <div x-show="! recovery">
                @livewire('send-two-factor-code')
            </div>
            <button type="button" class="btn btn-ghost btn-sm"
                    x-show="! recovery"
                    x-on:click="
                                    recovery = true;
                                    $nextTick(() => { $refs.recovery_code.focus() })
                                ">
                {{ __('Use a recovery code') }}
            </button>

            <button type="button" class="btn btn-ghost btn-sm"
                    x-show="recovery"
                    x-on:click="
                                    recovery = false;
                                    $nextTick(() => { $refs.code.focus() })
                                ">
                {{ __('Use an authentication code') }}
            </button>
        </div>

        <x-validation-errors class="mx-auto max-w-xs mb-4 mt-4" />

        <form class="mx-auto max-w-xs mt-4" method="POST" action="{{ route('two-factor.login') }}">
            @csrf

            <div class="mt-1" x-show="! recovery">
                <x-label for="code" value="{{ __('Code') }}" />
                <x-input id="code" class="block mt-1 w-full" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
            </div>

            <div class="mt-1" x-show="recovery">
                <x-label for="recovery_code" value="{{ __('Recovery Code') }}" />
                <x-input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
            </div>

            <div class="flex w-full items-center justify-start mt-4">
                <button type="submit" class="w-full inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white">
                    {{ __('Masuk') }}
                </button>
            </div>

        </form>
    </div>
</x-guest-layout>
