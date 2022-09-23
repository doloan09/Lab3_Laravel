<?php

namespace App\Listeners;

use App\Events\SendLetter;
use App\Notifications\Greeting;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\SendLetter  $event
     * @return void
     */
    public function handle(SendLetter $event)
    {
        if ($event->user instanceof MustVerifyEmail && $event->user->hasVerifiedEmail()) {
            $event->user->notify(new Greeting());
        }
    }
}
