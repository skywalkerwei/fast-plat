<?php

namespace App\Repository\Models;

use App\Presenters\GoodsSpecificationPresenter;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Goods.
 *
 * @package namespace App\Repository\Models;
 */
class Goods extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    public function category() {
        return $this->hasMany(GoodsAttribute::class, "goods_id");
    }

    public function specification() {
        return $this->hasMany(GoodsSpecification::class, "goods_id");
    }









}
