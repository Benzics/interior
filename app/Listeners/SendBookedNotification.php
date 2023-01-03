<?php

namespace App\Listeners;

use App\Events\ProductBooked;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendBookedNotification
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
     * @param  \App\Events\ProductBooked  $event
     * @return void
     */
    public function handle(ProductBooked $event)
    {
        //
    }
}
