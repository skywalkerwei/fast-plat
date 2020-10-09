<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('goods', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('goods_sn', 63)->default('')->index('goods_sn')->comment('商品编号');
			$table->string('name', 127)->default('')->comment('商品名称');
			$table->integer('category_id')->nullable()->default(0)->index('cat_id')->comment('商品所属类目ID');
			$table->string('gallery', 1023)->nullable()->comment('商品宣传图片列表，采用JSON数组格式');
			$table->string('keywords')->nullable()->default('')->comment('商品关键字，采用逗号间隔');
			$table->string('brief')->nullable()->default('')->comment('商品简介');
			$table->boolean('is_on_sale')->nullable()->default(1)->comment('是否上架');
			$table->smallInteger('sort_order')->nullable()->default(100)->index('sort_order');
			$table->string('pic_url')->nullable()->comment('商品页面商品图片');
			$table->string('share_url')->nullable()->comment('商品分享海报');
			$table->boolean('is_new')->nullable()->default(0)->comment('是否新品首发，如果设置则可以在新品首发页面展示');
			$table->boolean('is_hot')->nullable()->default(0)->comment('是否人气推荐，如果设置则可以在人气推荐页面展示');
			$table->string('unit', 31)->nullable()->default('’件‘')->comment('商品单位，例如件、盒');
			$table->decimal('counter_price', 10)->nullable()->default(0.00)->comment('专柜价格');
			$table->decimal('retail_price', 10)->nullable()->default(100000.00)->comment('零售价格');
			$table->text('detail', 65535)->nullable()->comment('商品详细介绍，是富文本格式');
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
		Schema::drop('goods');
	}

}
