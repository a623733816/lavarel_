<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebPageTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_page_type', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->default('')->comment('分类名称');
			$table->boolean('status')->default(1)->comment('默认１正常，２禁用');
			$table->dateTime('created_at')->default('0000-00-00 00:00:00')->comment('创建时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('web_page_type');
	}

}
