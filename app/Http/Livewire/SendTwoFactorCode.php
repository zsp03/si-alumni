<?php

namespace App\Http\Livewire;

use App\Notifications\SendOTPWhatsapp;
use Laravel\Fortify\Http\Requests\TwoFactorLoginRequest;
use Livewire\Component;

class SendTwoFactorCode extends Component
{
    public $isPhoneNumberEnabled = false;
    public function sendWATwoFactorCode(TwoFactorLoginRequest $request)
    {
        $request->challengedUser()->notify(app(SendOTPWhatsapp::class));
    }

    public function sendEmailTwoFactorCode(TwoFactorLoginRequest $request)
    {
        $request->challengedUser()->notify(app(SendOTPWhatsapp::class));
    }

    public function mount(TwoFactorLoginRequest $request)
    {
        if($request->challengedUser()->phone_number !== null){
            $this->isPhoneNumberEnabled = true;
        }
    }

    public function render()
    {
        return view('livewire.send-two-factor-code');
    }
}
