<?php

namespace App\Http\Livewire;

use App\Notifications\SendOTPEmail;
use App\Notifications\SendOTPWhatsapp;
use Laravel\Fortify\Http\Requests\TwoFactorLoginRequest;
use Livewire\Component;
use WireUi\Traits\Actions;

class SendTwoFactorCode extends Component
{
    use Actions;
    public $isPhoneNumberEnabled = false;
    public function sendWATwoFactorCode(TwoFactorLoginRequest $request)
    {
        $request->challengedUser()->notify(app(SendOTPWhatsapp::class));
        $this->notification()->send([
            'title' => 'Code sent',
            'description' => 'Please check your WhatsApp for verification code',
            'icon' => 'success',
            'timeout' => 3000
        ]);
    }

    public function sendEmailTwoFactorCode(TwoFactorLoginRequest $request)
    {
        $request->challengedUser()->notify(app(SendOTPEmail::class));
        $this->notification()->send([
            'title' => 'Code sent',
            'description' => 'Please check your email for verification code',
            'icon' => 'success',
            'timeout' => 3000
        ]);
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
