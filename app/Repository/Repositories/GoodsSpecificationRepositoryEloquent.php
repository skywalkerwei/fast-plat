<?php

namespace App\Repository\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repository\Interfaces\goods_specificationRepository;
use App\Repository\Models\GoodsSpecification;
use App\Http\Requests\GoodsSpecificationValidator;

/**
 * Class GoodsSpecificationRepositoryEloquent.
 *
 * @package namespace App\Repository\Repositories;
 */
class GoodsSpecificationRepositoryEloquent extends BaseRepository implements GoodsSpecificationRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return GoodsSpecification::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
