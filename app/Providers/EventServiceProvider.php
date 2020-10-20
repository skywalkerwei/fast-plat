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


        //订单支付成功
        'App\Events\OrderPayed' =>[
            'App\Listeners\OrderPayedListener',         //支付完成后订单处理
            'App\Listeners\PrinterListener',            //打印机处理  - print 队列中处理
            'App\Listeners\DeliverNoticeListener',      //通知配送平台处理 - print 打印机队列处理
        ],

        //配送平台确认
        'App\Events\DeliverConfirm'=>[
            'App\Listeners\DeliverConfirmListener',
        ],

        //配送平台分配骑手
        'App\Events\DeliverCarrier'=>[
            'App\Listeners\DeliverCarrierListener',
        ],

        //骑手到店取餐
        'App\Events\DeliverShop'=>[
            'App\Listeners\DeliverShopListener',
        ],

        //配送中
        'App\Events\Delivering'=>[
            'App\Listeners\DeliveringListener',
        ],

        //配送完成
        'App\Events\DeliverComplete'=>[
            'App\Listeners\DeliverCompleteListener',
        ],

        //配送异常
        'App\Events\DeliverExecption'=>[
            'App\Listeners\DeliverExecptionListener',
        ],

        //订单完成
        'App\Events\OrderCompleted'=>[
            'App\Listeners\OrderCompleteListener',  //订单完成操作
        ],

        //订单取消
        'App\Events\OrderCancel'=>[
            'App\Listeners\OrderCancelListener',        //直接取消订单
        ],

        //订单退款
        'App\Events\OrderRefund'=>[                 //订单退款
            'App\Listeners\OrderRefundListener',
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
