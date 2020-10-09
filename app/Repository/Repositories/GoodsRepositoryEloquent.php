<?php

namespace App\Repository\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repository\Interfaces\GoodsRepository;
use App\Repository\Models\Goods;
use App\Http\Requests\GoodsValidator;

/**
 * Class GoodsRepositoryEloquent.
 *
 * @package namespace App\Repository\Repositories;
 */
class GoodsRepositoryEloquent extends BaseRepository implements GoodsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Goods::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return GoodsValidator::class;
    }

    public function getFieldsSearchable()
    {
        return ['id','name','keywords'];
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
