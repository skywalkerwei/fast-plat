<?php

namespace App\Jobs;

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
    }
}
