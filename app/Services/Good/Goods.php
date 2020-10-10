<?php
namespace App\Services\Good;
use App\Repository\Interfaces\GoodsRepository;
use Illuminate\Http\Request;

class Goods
{
    private $repository;

    public function __construct(GoodsRepository $repository)
    {
        $this->repository = $repository;
    }

    //全部
    public function all()
    {
//        return $this->repository->with(['category'])->all();
        return $this->repository->all();
    }

    //列表分页
    public function paginate()
    {
        return $this->repository->paginate();
    }

    //列表测试
    public function tt()
    {
       return  $this->repository->with(['category','specification'])->findWhere(['category_id'=>'1008008']);
    }


    public function show($id)
    {

        return $this->repository->with(['category','specification'])->find($id);
    }

    public function store(Request $request)
    {
        return $this->repository->create($request->all());
    }


    public function update(Request $request, $id)
    {
        return  $this->repository->update($request->all(), $id);
    }

    public function destroy($id)
    {
        return $this->repository->delete($id);
    }

}
