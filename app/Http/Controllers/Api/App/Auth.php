<?php

namespace App\Http\Controllers\Api\App;
use App\Services\User\UserService;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\RegPost;
use App\Http\Controllers\Base;


/**
 * @title  认证
 * @group 用户端
 * @description 认证相关
 */
class Auth extends Base
{

    protected  $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @title 登陆
     * @description 用户登陆
     * @author 开发者
     * @url /api/login
     * @method Post
     * @param name:name type:string require:1 default: other: desc:name
     * @param name:password type:string require:1 default: other: desc:密码
     * @return array:数组值#
     */
    public function login(UserRequest $request)
    {

        $input = $request->input();
        return  $this->response->success([
            'token' => $this->userService->attempt($input)
        ]);

    }

    /**
     * @title 获取当前用户信息
     * @description 获取当前用户信息
     * @author 开发者
     * @url /api/me
     * @method Get
     * @header name:Authorization type:string require:1 default: other: desc:Authorization
     * @return array:数组值#
     */
     public  function  profile(Request $request){

        return $this->response->success([
            'user'=> $this->user(),
        ]);

    }

    /**
     * @title 注册
     * @description 用户注册
     * @author 开发者
     * @url /api/reg
     * @method Post
     * @param name:name type:string require:1 default: other: desc:name
     * @param name:password type:string require:1 default: other: desc:密码
     * @return array:数组值#
     */
    public function reg(RegPost $request)
    {
        $input = $request->input();
        $pwd = password_hash($input['password'], PASSWORD_BCRYPT);
        $userInfo = [
            'password'=>$pwd,
            'name'=>$input['name'],
        ];
        $jwt_token = $this->userService->reg($userInfo);
        return  $this->response->success([
            'token' => 'Bearer'.$jwt_token,
        ]);
    }


    public  function  test(){

//        $this->dispatch(new Notice());
//        event(new \App\Events\UserLogin());
//        $jwt_token = $this->userService->tokenFromUid(1);
//        return  $this->success([
//            'token' => 'Bearer'.$jwt_token,
//        ]);
    }

    /**
     * @title 退出登陆
     * @description logout
     * @author 开发者
     * @url /api/logout
     * @method Get
     * @header name:Authorization type:string require:1 default: other: desc:Authorization
     * @return array:数组值#
     */
    public  function  logout(Request $request){
        $this->clearToken();
        return $this->response->success();
    }



}
