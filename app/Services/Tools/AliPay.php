<?php
namespace App\Services\Tools;
use Pay;

/**
todo  后续调整
 */
class AliPay
{

    //小程序支付
    function miniapp(){

        $order = [
            'out_trade_no' => time(),
            'total_amount' => '1',
            'subject' => 'test subject - 测试',
        ];
        return Pay::alipay()->mini($order);
    }

    //app
    function app(){

        $order = [
            'out_trade_no' => time(),
            'total_amount' => '1',
            'subject' => 'test subject - 测试',
        ];
        return Pay::alipay()->app($order);
    }

}
