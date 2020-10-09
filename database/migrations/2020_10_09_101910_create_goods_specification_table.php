<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsSpecificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('goods_specification', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('goods_id')->default(0)->index('goods_id')->comment('商品表的商品ID');
			$table->string('specification')->default('')->comment('商品规格名称');
			$table->string('value')->default('')->comment('商品规格值');
			$table->string('pic_url')->default('')->comment('商品规格图片');
			$table->timestamps();
			$table->softDeletes()->comment('逻辑删除');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('goods_specification');
	}

}
