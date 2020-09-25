<?php

namespace App\Http\Controllers\Api\App;
use App\Services\User\UserService;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\RegPost;
use App\Http\Controllers\Base;


/**
 * @group 用户Auth
 *
 * APIs for managing users
 */
class Auth extends Base
{

    protected  $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * 登陆
     *
     * 登陆
     *
     */
    public function login(UserRequest $request)
    {

        $input = $request->input();
        return  $this->response->success([
            'token' => $this->userService->attempt($input)
        ]);

    }

    /**
     * 获取个人信息
     *
     *获取个人信息
     *
     */
     public  function  profile(Request $request){

        return $this->response->success([
            'user'=> $this->user(),
        ]);

    }

    /**
     * 注册
     *
     *  @param App\Http\Requests\RegPost $request
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
     * 退出
     *
     * 退出
     *
     */
    public  function  logout(Request $request){
        $this->clearToken();
        return $this->response->success();
    }



}
