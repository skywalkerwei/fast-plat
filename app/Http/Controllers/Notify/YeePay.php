<?php

namespace App\Http\Controllers\Notify;

use App\Http\Controllers\Base;


/**
 * @title  易宝支付
 * @description Wx 回调
 */
class YeePay extends Base
{
    protected $config;

    public function __construct()
    {

    }

    public function pay()
    {

        return $this->success("miniPay test");

    }

    //入驻回调
    public function settlement()
    {

        return $this->success("miniPay test");

    }
}

