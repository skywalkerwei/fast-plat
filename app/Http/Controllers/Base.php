<?php

namespace App\Http\Controllers;



namespace App\Http\Controllers;

use App\Support\Traits\ResponseTrait;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class Base extends Controller
{

    use ResponseTrait;

    public function user(){
         if($token = JWTAuth::getToken()){
             try {
                 return JWTAuth::parseToken()->authenticate();
             } catch (JWTException $e) {
             }
         }
         return null;
    }

    public function success($data = [], $msg = 'success', $code = 200) {
        return $this->response->success($data, $msg, $code);
    }

    public function fail($msg = 'faild', $data = [], $code = 0) {
         $this->response->fail($msg, $code,$data);
    }

    public function clearToken(){
        JWTAuth::setToken(JWTAuth::getToken())->invalidate();
    }

    public  function refresh(){
        if($token = JWTAuth::getToken()){
            try {
                return JWTAuth::parseToken()->refresh();
            } catch (JWTException $e) {
            }
        }
        return null;
    }






}
