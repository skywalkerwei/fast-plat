<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//无须验证身份- 回调接口都无须验证身份
Route::group([
    'middleware'    => [],
], function (Router $api) {

    //测试
    $api->any('test',function (){
        echo "回调test";
    });
    //微信小程序支付回调
    $api->any('wxMiniPay','Wx@miniPay');
    //微信App支付回调
    $api->any('wxAppPay','Wx@appPay');
    //蜂鸟回调
    $api->any('elept','Ele@elept');
    //配送达达回调
    $api->any('dada','Dada@callback');


//    //企业微信相关
//    //通讯录同步回调
//    $api->any('wechat/work_notify',"WxWork@work");
//    //坐商宝-API消息接受
//    $api->any('wechat/work_zsb_notify',"WxWork@zsb");
//    //坐商宝-客户消息接受
//    $api->any('wechat/work_client_notify',"WxWork@client");

});
