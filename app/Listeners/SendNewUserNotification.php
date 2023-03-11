<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Notifications\NewUserNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewUserNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserCreated $event): void
    {
        // Envoyer notification à l'utilisateur
        $event->user->notify(new NewUserNotification());;

    }
}
