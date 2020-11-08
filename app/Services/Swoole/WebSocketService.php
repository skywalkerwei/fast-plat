<?php
namespace App\Services\Swoole;
use Hhxsv5\LaravelS\Swoole\WebSocketHandlerInterface;
use Illuminate\Support\Facades\Log;
use Swoole\Http\Request;
use Swoole\WebSocket\Frame;
use Swoole\WebSocket\Server;
use Tymon\JWTAuth\Facades\JWTAuth;

class WebSocketService implements WebSocketHandlerInterface
{
    // 声明没有参数的构造函数
    private $wsTable;
    public function __construct()
    {
        $this->wsTable = app('swoole')->wsTable;
    }

    public function onOpen(Server $server, Request $request)
    {
        try {

            $user = JWTAuth::parseToken()->authenticate() ;
            Log::info('user message show',[$user]);
            $userId = $user->id ;
            $this->wsTable->set('uid:' . $userId, ['value' => $request->fd]);// 绑定uid到fd的映射
            $this->wsTable->set('fd:' . $request->fd, ['value' => $userId]);// 绑定fd到uid的映射
            $server->push($request->fd, $this->msg("登陆成功 #{$request->fd}"));

        }  catch (\Exception $e) {

            Log::error('on open error '.$e->getMessage());
            $server->push($request->fd, $this->msg('请重新登陆'));
            $server->disconnect($request->fd);
        }
    }

    public function onMessage(Server $server, Frame $frame)
    {
        Log::info('all message', [$this->wsTable]);
        //群发
        $this->sendAll($server,$frame);
        //
        $this->send($server,2,'sb');
    }

    //转发给所有人
    protected function sendAll(Server $server,Frame $frame){
//        foreach($server->connections as $fd){
//            $server->push($fd,$data);
//        }

        foreach ($this->wsTable as $key => $row) {
            Log::info('Received message', [$key,$row]);

            if (strpos($key, 'uid:') === 0 && $server->isEstablished($row['value'])) {
                Log::info('Received message ----- uid', [$key,$row]);
                $content = sprintf('new message "%s" from-》fd #%d', $frame->data, $frame->fd);
                $server->push($row['value'], $this->msg($content));
            }
        }

    }

    //发送单个
    protected function send(Server $server,$uid,$data){

        $fdData = $this->wsTable->get('uid:' . $uid);
        Log::info('send message uid', [$fdData]);
        if($fdData){
            $fd = $fdData['value'];
            if ($server->isEstablished($fd)) {
                $server->push($fd,$data);
            }
        }
    }

    //关闭
    public function onClose(Server $server, $fd, $reactorId)
    {
        Log::info('onClose message', [$fd,$reactorId]);
        $server->push($fd, "Goodbye #{$fd}");
        $uid = $this->wsTable->get('fd:' . $fd);
        if ($uid !== false) {
            $this->wsTable->del('uid:' . $uid['value']); // 解绑uid映射
        }
        $this->wsTable->del('fd:' . $fd);// 解绑fd映射
    }


    //消息格式处理 - 系统消息
    public function msg($msg,$data=[],$messageType='system'){

        $data = [
            'type'     => $messageType,
            'data'  => $data,
            'msg'   => $msg,
            'datetime' => time(),
        ];
        return json_encode($data);

    }

}
