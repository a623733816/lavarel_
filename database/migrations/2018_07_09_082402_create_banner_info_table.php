<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBannerInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('banner_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->nullable()->default('')->comment('banner名称');
			$table->string('keyword')->nullable()->default('')->comment('关键字（多个json存放）');
			$table->string('img_path')->nullable()->default('')->comment('bannerUrl');
			$table->boolean('status')->default(1)->comment('默认１正常２禁用');
			$table->dateTime('created_at')->nullable()->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('banner_info');
	}

}
