<?php
namespace App\Services\Tools;

//验证码相关
use Illuminate\Support\Facades\Cache;

class ValidCode
{
    protected $mobile;
    protected $template;
    protected $config;

    function __construct()
    {
        $this->config=config('easysms.validCode');
    }

    function mobile($mobile){
        $this->mobile=$mobile;
        return $this;
    }


    function template($template){
        $this->template=$template;
        return $this;
    }


    //验证短信
    public function check($code){
        $testCode = $this->config['testCode'];
        if($this->config['debug'] && $code==$testCode){
            return true;
        }
        $key = $this->getKey();

        if($data=Cache::get($key)){
            if($data['code'] == $code){
                Cache::forget($key);

                return  true;
            }
            $times = $data['times']+1;

            if($times >= $this->config['max_check_times']){
                Cache::pull($key);
                return false;
            }
            $newData = $data;
            $newData['times'] = $times;
            $life=$data['life']-time();
            Cache::put($key,$newData,$life);
            return  false;

        }

        return false;

    }

    //发送验证码
    public function sendCode(){
        $key = $this->getKey();
        $now=time();//

        $life = $this->config['life'];
        $debug = $this->config['debug'];
        $interval = $this->config['interval'];
        $code_length = $this->config['code_length'];
        $testUsers = $this->config['testUsers'];
        $testCode = $this->config['testCode'];

        //debug 模式 不做任何操作，testCode
        if(!$debug) {
            $data = Cache::get($key);
            if(!empty($data)){
                if($now<$data['next']){
                    abort("422","请求太频繁，请稍候再试");
                }
                Cache::forget($key);
            }
            //测试账号不发送code
            if(in_array($this->mobile,$testUsers)){
                $code = $testCode;
                $data=[
                    'code'=> $code,
                    'next'=>$now+$interval,
                    'times'=>0,
                    'life'=>$now+$life,
                ];
                return Cache::put($key,$data,$life);
            }else{
                $code =  $this->randomCode($code_length);
                $data=[
                    'code'=> $code,
                    'next'=>$now+$interval,
                    'times'=>0,
                    'life'=>$now+$life,
                ];
                if($this->sendSms($code)){
                    return Cache::put($key,$data,$life);
                }
            }


        }
        return  true;
    }



    protected function sendSms($code){
        try {
            $sms = app('easysms');
            return $sms->send($this->mobile, [
                'template' => $this->template,
                'data' => [
                    'code' => $code
                ],
            ]);
        } catch (\Overtrue\EasySms\Exceptions\NoGatewayAvailableException $e) {
            $exception = $e->results['aliyun']['exception'];
            abort(0,$exception->raw['Message']);
        }
    }

    protected function getKey(){
        if(empty($this->mobile)||empty($this->template)){
            abort("421","缺少参数");
        }
        return $this->mobile.'_validate_code_'.$this->template;
//        return md5($this->mobile.'_validate_code_'.$this->template);
    }

    protected function randomCode($length = 6) {
        $min = pow(10 , ($length - 1));
        $max = pow(10, $length) - 1;
        return mt_rand($min, $max);
    }

}
