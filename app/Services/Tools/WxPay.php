<?php
namespace App\Services\Tools;
use Pay;

/**
todo  后续调整
 */
class WxPay
{
    //小程序支付
    function miniapp(){

        $order = [
            'out_trade_no' => time(),
            'body' => 'subject-测试',
            'total_fee'      => '1',
            'openid' => 'onkVf1FjWS5SBIixxxxxxxxx',
        ];
        return Pay::wechat()->miniapp($order);
    }

    //app支付
    function app(){

        $order = [
            'out_trade_no' => time(),
            'body' => 'subject-测试',
            'total_fee'      => '1',
            'openid' => 'onkVf1FjWS5SBIixxxxxxxxx',
        ];
        return Pay::wechat()->app($order);
    }




}
