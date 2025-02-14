<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateLastActiveAt
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
    public function handle(Login $event): void
    {
        
        $user = $event->user;
        // Set the user as active
        $user->is_active = true;
        // Or update the timestamp
        $user->last_active_at = Carbon::now();
        $user->save();
    }
}
