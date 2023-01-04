<?php

namespace App\Listeners;

use App\Events\ProductBooked;
use App\Mail\ProductBooked as MailProductBooked;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendBookedNotification implements ShouldQueue
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
        // notify the user
        Mail::to($event->data['email'])->send(new MailProductBooked($event->data));

    }
}
