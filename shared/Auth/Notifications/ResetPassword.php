<?php

namespace Shared\Auth\Notifications;

use Shared\Notifications\Notification;
use Shared\Notifications\Messages\MailMessage;


class ResetPassword extends Notification
{
    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;


    /**
     * Create a notification instance.
     *
     * @param  string  $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return array('mail');
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(__d('shared', 'Reset Password'))
            ->line(__d('shared', 'You are receiving this email because we received a password reset request for your account.'))
            ->action(__d('shared', 'Reset Password'), site_url('password/reset', $this->token))
            ->line(__d('shared', 'If you did not request a password reset, no further action is required.'))
            ->queued();
    }
}
