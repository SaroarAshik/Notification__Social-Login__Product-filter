<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmailNotification extends Notification implements ShouldQueue{
    use Queueable;


    public $name = '';
    public $channel = '';

    public function __construct($name,$channel){
        $this->name = $name;
        $this->channel = $channel;
    }


    public function via(object $notifiable): array{
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage{
                    // return (new MailMessage)
                    // ->line('H!! Saroar')
                    // ->line('The introduction to the notification.')
                    // ->action('Notification Action', url('/'))
                    // ->line('Thank you for using our application!');


            $name = $this->name;
            $channel = $this->channel;
            return (new MailMessage)->view('email',compact('name','channel'));
    }

    public function toArray(object $notifiable): array{
        return [
            
        ];
    }
}