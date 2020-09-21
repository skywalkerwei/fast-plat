<?php

namespace App\Http\Controllers\Api\App;
use Illuminate\Http\Request;

//use App\Http\Resources\UserResource;
//use App\Repository\Interfaces\UserInterface;
use App\Services\User\UserService;
use App\Http\Controllers\Base;
//use Tightenco\Collect\Support\Collection;
//use Rodenastyle\StreamParser\StreamParser;

/**
 * @title  用户
 * @group 用户端
 * @description 用户相关
 */
class User extends Base
{

//    protected  $userRepository;
    protected  $userService;

    public function __construct(UserService $userService)
    {
//        $this->userRepository = $userRepository;
        $this->userService = $userService;
    }

//    public function __construct(UserInterface $userRepository,UserService $userService)
//    {
//        $this->userRepository = $userRepository;
//        $this->userService = $userService;
//    }

    /**
     * @title 全部用户
     * @description 全部用户
     * @author 开发者
     * @url /api/userlist
     * @method Get
     * @return array:数组值#
     */
    public  function  list(Request $request){
//        echo password_hash('123123', PASSWORD_BCRYPT);
//        $sms = app('easysms');
//        try {
//            $result = $sms->send('18627111095', [
//                'template' => 'SMS_169030027',
//                'data' => [
//                    'code' => 1234
//                ],
//            ]);
//            dd($result);
//        } catch (\GuzzleHttp\Exception\ClientException $exception) {
//            $response = $exception->getResponse();
//            $result = json_decode($response->getBody()->getContents(), true);
//            dd($result);
//        }


//        printf("Now: %s",  \Carbon\Carbon::now());
        $list =$this->userRepository->all();
//         return $this->success($list);
        return $this->success(UserResource::collection($list));

    }


    public function changepwd(Request $request){

        return $this->success($this->userService->changePwd('1','123123'));


    }



}
