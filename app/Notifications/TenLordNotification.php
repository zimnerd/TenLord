<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class TenLordNotification extends Notification
{
    use Queueable;
    private $tenlordnote;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->tenlordnote = $tenlordnote;
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
        return (new MailMessage)
                    ->line('You have new notification.')
                    ->action('View Notification', route('tenlordnotes.show',[$this->tenlordnote]))
                    ->line('What are they saying!');
    }

    public function toDatabase($notifiable)
    {
        return [
            'sender_id' => $notifiable->id,
            'tenlordnote_id' => $this->tenlordnote->id
        ];
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
            'workout'=>$this->tenlordnote->id
        ];
    }
}
