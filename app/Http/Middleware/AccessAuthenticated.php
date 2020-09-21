<?php

namespace App\Http\Middleware;

use Closure;

class AccessAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Reset authenticate
//         $accessToken = $request->header('accesstoken');
//         if(!$this->analysis_access_token($accessToken)){
//             abort('10001',accesstoken 请求不合法);
//         }
        return $next($request);


    }

    /**
     * 生成accesstoken
     * @param $app_key string  app_key
     * @param $app_id int app_id
     * @return string
     */
    private function generate_access_token()
    {
        $time = time();
        $sign = md5(date("Ymd").'_'.config('API_SUBTYPE'));
        return  base64_encode("{$time}_{$sign}");
    }

    /**
     * 解析token
     * @param $access_token
     * @return array
     */
    private function analysis_access_token($access_token)
    {
        $accessToken = base64_decode($access_token);
        $token_array = explode('_', $accessToken);// 分隔符由Token生成算法决定

        if(count($token_array)!=2){
            return false;
        }
        $time = $token_array[0];
        $sign = $token_array[1];
        // 校验时间10分钟有效 以内
//        if ($time < (time() - 600) || $time > (time() + 600)) {
//            return false;
//        }

        $nSign = md5(date("Ymd").'_'.config('API_SUBTYPE'));
        if($sign != $nSign){
            return false;
        }
        return true;
    }


}
