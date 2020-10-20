<?php

namespace App\Http\Controllers;



class WorkWechatNotify extends Base
{

    protected $config;

    public function __construct()
    {

    }


    //企业微信客户联系人 Notify
    function  client()
    {

        $app = app('wechat.work.client');
        $app->server->push(function($message) use ($app) {
            \Log::info($message);
//            $welcomeCode = '';
//            $app->external_contact_message->sendWelcome($welcomeCode, [
//                'text' => [
//                    'content' => '测试',
//                ],
//            ]);
            return "欢迎关注client";
        });
        return $app->server->serve();

    }


    function send(){

    }


    //企业微信 Notify
    function  zsb()
    {

        $app = app('wechat.work.zsb');
        $app->server->push(function($message){
            return "欢迎关注ZSB";
        });
        return $app->server->serve();

    }


    //企业微信 Notify
    function  work()
    {
        \Log::info('request arrived.');

        $app = app('wechat.work');
        $app->server->push(function($message){
            return "欢迎关注！";
        });
        return $app->server->serve();

    }
}
