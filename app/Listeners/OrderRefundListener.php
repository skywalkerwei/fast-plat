<?php

namespace App\Listeners;

use App\Events\OrderRefund;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class OrderRefundListener
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
     * @param  OrderRefund  $event
     * @return void
     */
    public function handle(OrderRefund $event)
    {
        //
    }
}
