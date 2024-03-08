<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class RedefinirSenhaNotification extends Notification
{
    use Queueable;
    public $token;
    public $email;
    public $name;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token, $email, $name)
    {
        $this->token = $token;
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // $url = url(config('app.url').route('password.reset', [
        //     'token' => $this->token,
        //     'email' => $notifiable->getEmailForPasswordReset(),
        // ], false));

        $url = 'http://localhost:8000/password/reset/'.$this->token.'?email='.$this->email;
        $minutos = config('auth.passwords.'.config('auth.defaults.passwords').'.expire');
        $saudacao = 'Ola '.$this->name;
        return (new MailMessage)
                    ->subject('Atualisação de senha')
                    ->greeting($saudacao)
                    ->line('Esqueceu a senha! sem problemas vamos redefini-la')
                    ->action('Clique aqui para modificar a senha', $url)
                    ->line('O link de redefinição de senha expira em '. $minutos.' minutos')
                    ->line('Caso você não tenha solicitado uma redefinição de senha, ignore este e-mail')
                    ->salutation('Obrigado, '.config('app.name'));
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
}