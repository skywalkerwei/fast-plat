<?php

namespace App\Listeners;

use App\Events\Delivering;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DeliveringListener
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
     * @param  Delivering  $event
     * @return void
     */
    public function handle(Delivering $event)
    {
        //
    }
}
