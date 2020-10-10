<?php
namespace App\Services\User;

//验证码相关
use App\Services\Tools\ValidCode;

class Sms
{
    protected $validCode;
    protected $config;

    //validCode 服务
    public function __construct(ValidCode $validCode)
    {
        $this->validCode = $validCode;
        $this->config=config('easysms.template');//template 短信模版列表
    }

    //注册验证码
    public  function reg($mobile){
        $template = $this->config['reg'];
        return   $this->validCode->mobile($mobile)->template($template)->sendCode();
    }

    //登陆验证码
    public  function login($mobile){
        $template = $this->config['login'];
        return   $this->validCode->mobile($mobile)->template($template)->sendCode();
    }

    //注册验证码-验证
    public  function regCheck($mobile,$code){
        $template = $this->config['reg'];
        return $this->validCode->mobile($mobile)->template($template)->check($code);
    }

    //登陆验证码-验证
    public  function loginCheck($mobile,$code){
        $template = $this->config['login'];
        return $this->validCode->mobile($mobile)->template($template)->check($code);
    }


}
