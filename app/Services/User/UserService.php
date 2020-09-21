<?php
namespace App\Services\User;
use App\Repository\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserService
{
    protected  $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public  function attempt($input){

        if(!$jwt_token =  JWTAuth::attempt($input)){
            throw  new \Exception('账号密码错误');
        }
        return 'Bearer'.$jwt_token;
    }


    //注册
    public function reg($userInfo){
        $user =  $this->user::create($userInfo);
        return JWTAuth::fromUser($user);
    }

    //通过uid 获取 token
    public function tokenFromUid($uid){
        $userInfo = $this->user::find($uid);
        return JWTAuth::fromUser($userInfo);
    }


    //修改用户密码
    public function changePwd($uid,$newPwd){
        $pwd = password_hash($newPwd, PASSWORD_BCRYPT);
        $this->user::where('id',$uid)->update(['password' => $pwd]);
    }


}
