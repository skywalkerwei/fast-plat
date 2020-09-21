<?php

/* env配置示例
    DOC_PREFIX=doc
    DOC_API_PREFIX=
    DOC_TITLE=API文档
    DOC_VERSION=1.0
    DOC_COPYRIGHT='Powered By ypai'
    DOC_PASSWORD=

 */
return [
    'prefix'=>env('DOC_PREFIX','doc'), //访问前缀
    'api_prefix'=>env('DOC_API_PREFIX',''), //api请求前缀
    'title' => env('DOC_TITLE','接口文档'),  //文档title
    'version'=>env('DOC_VERSION','0.0.1'), //文档版本
    'copyright'=>env('DOC_COPYRIGHT','Powered By FastPlat'), //版权信息
    'password' => env('DOC_PASSWORD',''), //访问密码，为空不需要密码

    'static_path' => 'apidoc',
    'controller' => [//需要生成文档的类
        //用户端
        'App\Http\Controllers\Api\App\Auth',
        //总后台

        //商户端

        //认证端

        //第三方应用端
    ],
    'filter_method' => [
        //过滤 不解析的方法名称
    ],
    'return_format' => [
        //数据格式
        'success' => true,
        'code' => "1/200/300/301/302",
        'msg' => "提示信息",
    ],
    'public_header' => [
        //全局公共头部参数
        //如：['name'=>'version', 'require'=>1, 'default'=>'', 'desc'=>'版本号(全局)']
    ],
    'public_param' => [
        //全局公共请求参数，设置了所以的接口会自动增加次参数
        //如：['name'=>'token', 'type'=>'string', 'require'=>1, 'default'=>'', 'other'=>'' ,'desc'=>'验证（全局）')']
    ],
];
