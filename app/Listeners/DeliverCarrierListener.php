<?php

namespace App\Listeners;

use App\Events\DeliverCarrier;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DeliverCarrierListener
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
     * @param  DeliverCarrier  $event
     * @return void
     */
    public function handle(DeliverCarrier $event)
    {
        //
    }
}
