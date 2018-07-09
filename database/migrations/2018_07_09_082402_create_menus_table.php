<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('url');
			$table->string('active');
			$table->string('active_url');
			$table->string('icon')->nullable();
			$table->smallInteger('permission_id');
			$table->smallInteger('sort')->default(0);
			$table->boolean('is_system')->default(0);
			$table->integer('parent_id')->default(0);
			$table->string('email');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('menus');
	}

}
