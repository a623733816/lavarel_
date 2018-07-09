<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 45)->nullable()->default('')->comment('姓名');
			$table->string('company')->nullable()->default('')->comment('公司');
			$table->string('phone', 45)->nullable()->default('')->comment('电话手机');
			$table->string('project_theme')->nullable()->default('')->comment('品牌名称');
			$table->string('email', 100)->nullable()->default('')->comment('邮箱');
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
		Schema::drop('project_info');
	}

}
