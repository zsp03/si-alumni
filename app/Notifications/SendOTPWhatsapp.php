<?php

namespace App\Notifications;

use App\Actions\TwoFactorOTP\GenerateOTP;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\WhatsApp\Component;
use NotificationChannels\WhatsApp\WhatsAppChannel;
use NotificationChannels\WhatsApp\WhatsAppTemplate;

class SendOTPWhatsapp extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [WhatsAppChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toWhatsapp($notifiable)
    {
        return WhatsAppTemplate::create()
            ->name('two_factor_code') // Name of your configured template
            ->language('id')
            ->body(Component::text($this->getTwoFactorCode($notifiable)))
            ->buttons(Component::urlButton([$this->getTwoFactorCode($notifiable)]))
            ->to($notifiable->phone_number);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    public function getTwoFactorCode(User $notifiable): ?string
    {
        if(!$notifiable->two_factor_secret){
            return null;
        }

        return GenerateOTP::for(
            decrypt($notifiable->two_factor_secret)
        );
    }
}
