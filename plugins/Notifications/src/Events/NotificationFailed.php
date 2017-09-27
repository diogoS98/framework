<?php

namespace Notifications\Events;


class NotificationFailed
{
    /**
     * The notifiable entity who received the notification.
     *
     * @var mixed
     */
    public $notifiable;

    /**
     * The notification instance.
     *
     * @var \Notifications\Notification
     */
    public $notification;

    /**
     * The channel name.
     *
     * @var string
     */
    public $channel;

    /**
     * The data needed to process this failure.
     *
     * @var array
     */
    public $data = array();

    /**
     * Create a new event instance.
     *
     * @param  mixed  $notifiable
     * @param  \Notifications\Notification  $notification
     * @param  string  $channel
     * @param  array  $data
     * @return void
     */
    public function __construct($notifiable, $notification, $channel, $data = array())
    {
        $this->channel = $channel;
        $this->notifiable = $notifiable;
        $this->notification = $notification;
        $this->data = $data;
    }
}