<?php

namespace App\Http\Controllers;



namespace App\Http\Controllers;

use App\Support\Traits\ResponseTrait;
use Tymon\JWTAuth\Facades\JWTAuth;

class Base extends Controller
{

    use ResponseTrait;

    public function user(){
         $token = JWTAuth::getToken();
         if($token){
            return JWTAuth::parseToken()->authenticate();
         }
         return null;
    }

    public function success($data = [], $msg = 'success', $code = 200) {
        return $this->response->success($data, $msg, $code);
    }

    public function fail($msg = 'faild', $data = [], $code = 500) {
        return $this->response->fail($msg, $code, $data);
    }

    public function clearToken(){
        JWTAuth::setToken(JWTAuth::getToken())->invalidate();
    }

    public  function refresh(){
        $token = JWTAuth::getToken();
        if($token){
            return JWTAuth::parseToken()->refresh();
        }
        return null;
    }






}
