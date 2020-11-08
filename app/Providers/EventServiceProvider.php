<?php

namespace App\Providers;

use App\Events\UserLogin;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        //sql 日志
        'Illuminate\Database\Events\QueryExecuted' => [
            'App\Listeners\QueryListener',
        ],

        //用户注册
        'App\Events\UserReg'  => [
            'App\Listeners\UserRegListener',


        ],

        //用户登陆
        'App\Events\UserLogin'  => [
            'App\Listeners\UserLoginListener',
        ],



    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
