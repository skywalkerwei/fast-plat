<?php

namespace App\Http\Controllers\Api\App;
use Illuminate\Http\Request;

//use App\Http\Resources\UserResource;
//use App\Repository\Interfaces\UserInterface;
use App\Services\User\UserService;
use App\Http\Controllers\Base;
//use Tightenco\Collect\Support\Collection;
//use Rodenastyle\StreamParser\StreamParser;


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
