<?php

namespace App\Repository\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class GoodsAttribute.
 *
 * @package namespace App\Repository\Models;
 */
class GoodsAttribute extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'goods_attribute';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
