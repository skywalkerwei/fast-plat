<?php
namespace App\Services\Swoole;
use App\Services\User\UserService;;


class SysMsgSend
{

    //系统管理员
    private $systemUser;

    public function __construct(UserService $UserService)
    {
         //id为1的用户就是系统管理员
        $this->systemUser = $UserService->tokenFromUid(1);
    }


    /**发送消息
     * [
     * 'type'=>"system",    //  消息类型 -》系统消息/群消息/个人消息/
     * 'to'=> ''            //  送达
     * 'msg'=>"test ---2 ", //  消息内容
     * 'ext'=>"===="        //  扩展内容
     * ];
     * @param $data
     */
    public  function  send($data){

        $port=config('laravels.listen_port');
        $url = "ws://0.0.0.0:".$port;

        $client = new \WebSocket\Client($url, [
            'timeout' => 60,
            'headers' => [
                'Authorization' => 'Bearer'.$this->systemUser,
            ],
        ]);
        $dataMsg = json_encode($data);
        $client->send($dataMsg);
        $result =  $client->receive();
        $client->close();

        return $result;


    }


}
