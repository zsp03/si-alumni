<div class="flex flex-col items-center gap-2 justify-center">
    @if(config('two-factor-notification.whatsapp-enabled'))
        @if($isPhoneNumberEnabled)
            <button class="btn btn-wide btn-success"
                    wire:click="sendWATwoFactorCode"
                    wire:target="sendWATwoFactorCode"
                    wire:loading.attr="disabled"> Send to WhatsApp </button>
        @endif
    @endif

    <button class="btn btn-wide"
            wire:click="sendEmailTwoFactorCode"
            wire:target="sendEmailTwoFactorCode"
            wire:loading.attr="disabled"> Send to Email </button>
</div>
