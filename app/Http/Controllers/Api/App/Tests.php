<?php

namespace App\Http\Controllers\Api\App;


use App\Services\User\UserService;
use App\Services\Goods\GoodsService;
use App\Http\Controllers\Base;

use App\Http\Requests\UserRequest;
use App\Jobs\Notice;
use App\Exceptions\ApiException;
use App\Repository\Models\User;
use Illuminate\Support\Carbon;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

use App\Services\Swoole\WebSocketClient;



/**
 * @group 测试
 *
 * APIs for managing users
 */
class Tests extends Base
{

    protected $userService;
    protected $goodsService;

    public function __construct(UserService $userService,GoodsService $goodsService)
    {
        $this->userService = $userService;
        $this->goodsService = $goodsService;
    }

    /**
     * 测试-tt
     *
     * 测试内容
     *
     * @urlParam  id required The ID of the post.
     * @urlParam  lang The language.
     * @queryParam  location_id required The id of the location.
     * @queryParam  user_id required The id of the user. Example: me
     * @queryParam  page required The page number. Example: 4
     * @bodyParam  user_id int required The id of the user. Example: 9
     * @bodyParam  room_id string The id of the room.
     * @bodyParam  forever boolean Whether to ban the user forever. Example: false
     */
    public function tt()
    {
//      return   $this->goodsService->tt();

        $user = User::findOrFail(1);
        $result =   $this->dispatch((new \App\Jobs\Notice($user))->onQueue("test"));
//        $result= $this->dispatch((new \App\Jobs\Notice($user))->delay(Carbon::now()->addMinutes(1)));
////      $this->dispatch((new \App\Jobs\Notice($user))->delay(Carbon::tomorrow()));
        return   $this->response->success($result);

//        $data=[
//            'to'=>"1",
//            'msg'=>"test ---2 ",
//            'from'=>"system",
//            'ext'=>"===="
//        ];
//        $port=config('laravels.listen_port');
//        $client=new WebSocketClient('127.0.0.1',$port);
//        $client->sendData(json_encode($data));
//        $client->disconnect();
//        return   $this->response->success("ok");

    }

    /**
     * @response  {
     *  "id": 4,
     *  "name": "Jessica Jones",
     *  "roles": ["admin"]
     * }
     */
    public function tt2(){
        return $this->fail("sb");
//        return   $this->response->fail("fail");
    }

}

