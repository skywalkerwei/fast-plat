<?php

namespace App\Listeners;

use App\Events\DeliverShop;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DeliverShopListener
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
     * @param  DeliverShop  $event
     * @return void
     */
    public function handle(DeliverShop $event)
    {
        //
    }
}
