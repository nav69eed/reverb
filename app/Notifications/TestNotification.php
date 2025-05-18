<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;

class TestNotification extends Notification
{
    public function via($notifiable)
    {
        return ['broadcast']; // use broadcast only for test
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'message' => 'This is a test Reverb notification!',
            'time' => now()->toDateTimeString(),
        ]);
    }
}
