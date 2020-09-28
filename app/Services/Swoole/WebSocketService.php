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
            if ($user = JWTAuth::parseToken()->authenticate()) {
                Log::info('user message show',[$user->id,$user->name]);
                $userId = $user->id ;
                $this->wsTable->set('uid:' . $userId, ['value' => $request->fd]);// 绑定uid到fd的映射
                $this->wsTable->set('fd:' . $request->fd, ['value' => $userId]);// 绑定fd到uid的映射
                $server->push($request->fd, "Welcome to LaravelS #{$request->fd}");
            }
        }  catch (\Exception $e) {
            $userId = mt_rand(1000, 10000);
            $this->wsTable->set('uid:' . $userId, ['value' => $request->fd]);// 绑定uid到fd的映射
            $this->wsTable->set('fd:' . $request->fd, ['value' => $userId]);// 绑定fd到uid的映射
            $server->push($request->fd, "Welcome to LaravelS #{$request->fd}");
        }
    }

    public function onMessage(Server $server, Frame $frame)
    {
        Log::info('all message', [$this->wsTable]);
        foreach ($this->wsTable as $key => $row) {
            Log::info('Received message', [$key,$row]);

            if (strpos($key, 'uid:') === 0 && $server->isEstablished($row['value'])) {
                $content = sprintf('sb: new message "%s" from #%d', $frame->data, $frame->fd);
                $server->push($row['value'], $content);
            }
        }
    }

    public function onClose(Server $server, $fd, $reactorId)
    {
        $uid = $this->wsTable->get('fd:' . $fd);
        if ($uid !== false) {
            $this->wsTable->del('uid:' . $uid['value']); // 解绑uid映射
        }
        $this->wsTable->del('fd:' . $fd);// 解绑fd映射
        $server->push($fd, "Goodbye #{$fd}");
    }
}
