<?php

namespace App\Jobs;

use App\Services\Swoole\WebSocketClient;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Repository\Models\User;

class Notice implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
//        sleep(5);
//        $result = false;
//        if (!$result) {
//            throw new Exception (' 异常！');
//        }
        $user = $this->user;
        $content =   $user->name."发表了新文章" . time() . "\n";
        file_put_contents('./notice.txt', $content, FILE_APPEND);

        $data=[
            'to'=>"1",
            'msg'=>"test ---2 ",
            'from'=>"system",
            'ext'=>"===="
        ];

        $port=config('laravels.listen_port');
        $client=new WebSocketClient('127.0.0.1',$port);
        $client->sendData(json_encode($data));
        $client->disconnect();

//        (new \GuzzleHttp\Client())->post('http://php:9573', [
//            'form_params' => [
//                'content' => 's---b',
//                'to' => '2',
//                'type' => 'publish',
//            ],
//
//        ]);
//        $fd = 1; // Find fd by userId from a map [userId=>fd].
//        /**@var \Swoole\WebSocket\Server $swoole */
//        $swoole = app('swoole');
//        $swoole->push($fd, 'Push data to fd#1 in Controller');
    }



}
