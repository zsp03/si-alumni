<?php

namespace App\Listeners;

use App\Notifications\SendOTPTwilio;
use App\Notifications\SendOTPWhatsapp;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Laravel\Fortify\Events\TwoFactorAuthenticationChallenged;
use Laravel\Fortify\Events\TwoFactorAuthenticationEnabled;

class SendTwoFactorCodeListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle( TwoFactorAuthenticationChallenged|TwoFactorAuthenticationEnabled $event)
    {
        $event->user->notify(app(SendOTPWhatsapp::class));
//        $event->user->notify(app(SendOTPTwilio::class));
    }
}
