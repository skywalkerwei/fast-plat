<?php
return [
    // HTTP 请求的超时时间（秒）
    'timeout' => 5.0,

    // 默认发送配置
    'default' => [
        // 网关调用策略，默认：顺序调用
        'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,

        // 默认可用的发送网关
        'gateways' => [
            'aliyun',
        ],
    ],
    // 可用的网关配置
    'gateways' => [
        'errorlog' => [
            'file' => '/tmp/easy-sms.log',
        ],
        'aliyun' => [
            'access_key_id' => env('ALIYUN_ACCESS_KEY_ID'),
            'access_key_secret' => env('ALIYUN_ACCESS_KEY_SECRET'),
            'sign_name' => env('ALIYUN_SIGN_NAME')
        ],
        'yunpian' => [
            'api_key' => env('YUNPIAN_API_KEY'),
        ],
    ],

    //验证码-相关-设置
    'validCode'=>[
        //是否开启调试，开启时默认验证码123123
        'debug'               =>    false,
        //验证码有效期
        'life'                =>    300,
        //发送验证码间隔时长
        'interval'            =>    60,
        //验证码长度
        'code_length'         =>    6,
        //验证码最多验证失败次数
        'max_check_times'     =>    5,
        //测试用户
        'testUsers' => [
            '18627111095',
        ],
        'testCode' => '123123'
    ],

    //短信模版
    'template'=>[
        'reg'=>'SMS_119076662',
        'login'=>'SMS_119076662',

    ],


];

