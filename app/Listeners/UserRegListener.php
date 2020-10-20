<?php

namespace App\Listeners;

use App\Events\UserReg;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserRegListener implements ShouldQueue
{

    //指定队列----reg
    public $queue = 'reg';

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
     * @param  UserReg  $event
     * @return void
     */
    public function handle(UserReg $event)
    {
        //
        info("sb",[$event]);
    }
}
