<?php

namespace App\Http\Controllers\Api\App;


use App\Events\OrderPayed;
use App\Events\UserReg;
use App\Services\Tools\ValidCode;
use App\Services\User\Sms;
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

use App\Services\Swoole\SysMsgSend;
use Illuminate\Support\Facades\Mail;

use Hhxsv5\LaravelS\Swoole\Task\Task;
use App\Services\Swoole\Tasks\TestTask;
use App\Services\Swoole\Table\UserTable;

use Illuminate\Support\Facades\Log;



/**
 * @group 测试
 *
 * APIs for managing users
 */
class Tests extends Base
{


    protected $sysMsgSend;
    protected $goodsService;
    protected $smsService;

    protected $userTable;

    public function __construct(SysMsgSend $sysMsgSend,GoodsService $goodsService,Sms $smsService)
    {
        $this->sysMsgSend = $sysMsgSend;
        $this->goodsService = $goodsService;
        $this->smsService = $smsService;

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

        return  event(new OrderPayed('1123123123123'));

//        $client = new \swoole_client(SWOOLE_SOCK_TCP);
//        $ret = $client->connect('0.0.0.0',8888,0.5);  // 创建连接
//        $res = $client->send("hello world\n");
//
//
//        var_dump($res);//结果是长度，发送成功
////        $client->send(json_encode($data)); // 发包
////        $rspBuffer = $client->recv(); // 接收回包
//        $client->close();

//        $this->sysMsgSend->send([
//            'msg'=>'sb'
//        ]);



//        $msg =  'Push data to websocket in Controller';

//        $this->deliver($msg);

//        $this->userTable = new UserTable();
//
//        $users = $this->userTable->all();
//        if (!empty($users)) {
//            $user = $users[array_rand($users)];
//            $this->pushMessage(app('swoole'), $user['fd'], $msg, 'message');
//        }


//        $this->fire($msg);

//        $swoole = app('swoole');
        // $swoole->ports：遍历所有Port对象，https://wiki.swoole.com/#/server/properties?id=ports
//        $port = $swoole->ports[0]; // 获得`Swoole\Server\Port`对象
//         $fd = 1; // Port中onReceive/onMessage回调的FD
//         $swoole->send($fd, 'Send tcp message from controller to port client');
//         $swoole->push($fd, 'Send websocket message from controller to port client');



//        var_dump($rspBuffer);
//        $fd = 1; // Find fd by userId from a map [userId=>fd].
//        $swoole = app('swoole');
//        $success = $swoole->push($fd, 'Push data to fd#1 in Controller');
//        dd($success);

//        return  event(new OrderPayed('1'));
//        return   $this->response->success("ok");

//        abort(422, 'Invalid email: administrator not found');
//        throw  new \Exception('token已过期',-10002);
//        throw  new \App\Exceptions\ApiException('token已过期',10002);
//        return $this->fail("sb");
//        Mail::raw('test mail', function ($m) {
//            $m->to('skywalkerwei@qq.com')->subject('test email');
//        });

//        $result = $this->smsService->loginCheck("18627111095",'123123');
//        if($result){
//            return   $this->response->success("ok");
//        }else{
//            return   $this->response->fail("no");
//        }

//        $user = User::findOrFail(1);
//        $result =   $this->dispatch((new \App\Jobs\Notice($user))->onQueue("test"));
//        $result= $this->dispatch((new \App\Jobs\Notice($user))->delay(Carbon::now()->addMinutes(1)));
//        $this->dispatch((new \App\Jobs\Notice($user))->delay(Carbon::tomorrow()));

//        $this->sysMsgSend->send([
//            'to'=>"2",
//            'msg'=>"test ---2 ",
//            'from'=>"system",
//            'ext'=>"===="
//        ]);

    }

    /**
     * @param string $msg
     * @return bool
     */
    private function deliver($msg = 'task data'): bool
    {
        // 实例化TestTask并通过deliver投递，此操作是异步的，投递后立即返回，由Task进程继续处理TestTask中的handle逻辑
        $task = new TestTask($msg);

        $task->delay(1); // 延迟3秒投递任务

        $task->setTries(3); // 出现异常时，累计尝试3次

        Log::info(__METHOD__, [$msg]);

        return Task::deliver($task);
    }

    /**
     * @param string $msg
     * @return bool
     */
    private function fire($msg = 'event data'): bool
    {
        // 实例化TestEvent并通过fire触发，此操作是异步的，触发后立即返回，由Task进程继续处理监听器中的handle逻辑
        $event = new TestEvent($msg);

        $event->delay(2); // 延迟10秒触发

        $event->setTries(3); // 出现异常时，累计尝试3次

        Log::info(__METHOD__, [$msg]);

        return Event::fire($event);
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

