<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends Notification    

{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }


    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Solicitud de reestablecimiento de contraseña')
            ->greeting('Hola ' .$notifiable->name)
            ->line('Recibes este email porque se solicitó un reestablecimiento de contraseña para tu cuenta')
            ->action('Restablecer contraseña', url(config('app.url').route('password.reset', $this->token, false)))
            ->line('Si no realizaste esta peticion, puedes ignorar este correo y nada habra cambiado')
            ->salutation(' Saludos !');
    }
}
