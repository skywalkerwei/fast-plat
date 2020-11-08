<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWTApiAuthenticate
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

           try {
                if ($user = JWTAuth::parseToken()->authenticate()) {
                    return $next($request);
                }
            } catch (TokenExpiredException $e) {
                 abort(10002, 'token已过期');
//                throw  new \App\Exceptions\ApiException('token已过期',10002);
            } catch (TokenInvalidException $e) {
                 abort(10003, 'token无效');
//                throw  new \App\Exceptions\ApiException('token无效',10003);
            } catch (JWTException $e) {
                 abort(10003, 'token无效');
//                throw  new \App\Exceptions\ApiException('token无效',10003);
//                \Log::error('>>>>> JWTException: ' . $e->getMessage());
            } catch (\Exception $e) {
                 abort(10004, '登录检验异常');
//                throw  new \App\Exceptions\ApiException('登录检验异常',10004);
                \Log::error('>>>>> 登录检验异常! Exception: ' . $e->getMessage());
            }


         abort(401);
    }
}
