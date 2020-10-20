<?php

namespace App\Listeners;

use App\Events\DeliverExecption;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DeliverExecptionListener
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
     * @param  DeliverExecption  $event
     * @return void
     */
    public function handle(DeliverExecption $event)
    {
        //
    }
}
