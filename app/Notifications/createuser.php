<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class createuser extends Notification
{
    use Queueable;
    private $user_id;
    private $name;
    /**
     * Create a new notification instance.
     */
    public function __construct($user_id,$name)
    {
        //
        $this->user_id=$user_id;
        $this->name=$name;
       
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

   
    public function toArray(object $notifiable): array
    {
        return [
            //
            'user_id' =>$this->user_id,
            'name' =>$this->name,
        ];
    }
}
