<?php

namespace App\Repository\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repository\Interfaces\GoodsAttributeRepository;
use App\Repository\Models\GoodsAttribute;
use App\Http\Requests\GoodsAttributeValidator;

/**
 * Class GoodsAttributeRepositoryEloquent.
 *
 * @package namespace App\Repository\Repositories;
 */
class GoodsAttributeRepositoryEloquent extends BaseRepository implements GoodsAttributeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return GoodsAttribute::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return GoodsAttributeValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
