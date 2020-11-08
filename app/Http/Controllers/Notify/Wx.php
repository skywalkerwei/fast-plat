<?php

namespace App\Http\Controllers\Notify;

use App\Http\Controllers\Base;


/**
 * @title  微信回调
 * @description Wx 回调
 */
class Wx extends Base
{

    protected $config;

    public function __construct()
    {

    }

    //小程序支付回调
    public function miniPay()
    {

        return $this->success("miniPay test");

    }

    //App支付回调
    public function appPay()
    {

        return $this->success("appPay test");

    }
}

