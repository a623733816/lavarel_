<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebPageInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_page_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('img_path')->nullable()->default('')->comment('门面图片url');
			$table->string('title')->nullable()->default('')->comment('标题');
			$table->string('desc')->nullable()->default('')->comment('描述');
			$table->text('content')->nullable()->comment('详情内容');
			$table->string('keyword')->nullable()->default('')->comment('关键字');
			$table->integer('type')->unsigned()->default(1)->comment('分类');
			$table->boolean('status')->default(1)->comment('默认１正常，２禁用');
			$table->dateTime('created_at')->nullable()->default('0000-00-00 00:00:00')->comment('创建时间');
			$table->string('f_img_path')->nullable()->default('')->comment('遮罩层图片');
			$table->string('title_b')->nullable()->default('')->comment('标题３');
			$table->string('title_a')->nullable()->default('')->comment('标题２');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('web_page_info');
	}

}
