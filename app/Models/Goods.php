<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


/**
 * Class Goods.
 *
 * @package namespace App\Repository\Models;
 */
class Goods extends Model
{
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
