<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsAttributeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('goods_attribute', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('goods_id')->default(0)->index('goods_id')->comment('商品表的商品ID');
			$table->string('attribute')->comment('商品参数名称');
			$table->string('value')->comment('商品参数值');
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
		Schema::drop('goods_attribute');
	}

}
