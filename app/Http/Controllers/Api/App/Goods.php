<?php

namespace App\Http\Controllers\Api\App;

use App\Http\Controllers\Base;
use App\Services\Goods\GoodsService;
use Illuminate\Http\Request;

/**
 * Class GoodsController.
 *
 * @package namespace App\Http\Controllers;
 */
class Goods extends Base
{

    protected $goodsService;


    public function __construct(GoodsService $goodsService)
    {
        $this->goodsService = $goodsService;
    }

    public function index()
    {
        $goods =  $this->goodsService->paginate();
        return $this->response->success($goods);
    }

    public function show($id)
    {
        $info =  $this->goodsService->show($id);
        return $this->response->success($info);
    }

    public function store(Request $request)
    {
        return $this->goodsService->store($request);
    }



}
