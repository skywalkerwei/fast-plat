<?php

namespace App\Repository\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class GoodsSpecification.
 *
 * @package namespace App\Repository\Models;
 */
class GoodsSpecification extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'goods_specification';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
