<?php

namespace App\Listeners;

use App\Events\OrderPayed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DeliverNoticeListener
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
     * @param  OrderPayed  $event
     * @return void
     */
    public function handle(OrderPayed $event)
    {
        //
    }
}
