<?php

namespace App\Http\Controllers\Api\App;


use App\Services\User\UserService;
use App\Http\Controllers\Base;

use App\Http\Requests\UserRequest;
use App\Jobs\Notice;
use App\Exceptions\ApiException;
use App\Repository\Models\User;
use Illuminate\Support\Carbon;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;
use App\Repository\Models\Mt;

/**
 * @title  测试
 * @description 测试例子相关
 */
class Tests extends Base
{

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function tt()
    {

        return $this->response->success("sbs");

    }
}

