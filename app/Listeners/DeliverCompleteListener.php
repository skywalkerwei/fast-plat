<?php

namespace App\Listeners;

use App\Events\DeliverComplete;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DeliverCompleteListener
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
     * @param  DeliverComplete  $event
     * @return void
     */
    public function handle(DeliverComplete $event)
    {
        //
    }
}
