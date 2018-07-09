<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 45)->nullable()->default('')->comment('姓名');
			$table->string('phone', 45)->nullable()->default('')->comment('电话');
			$table->string('company', 100)->nullable()->default('')->comment('企业名称');
			$table->string('address_detail', 100)->nullable()->default('')->comment('行业地址');
			$table->dateTime('created_at')->nullable()->default('0000-00-00 00:00:00')->comment('添加时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer_info');
	}

}
