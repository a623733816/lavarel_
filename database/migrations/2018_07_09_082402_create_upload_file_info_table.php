<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUploadFileInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('upload_file_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100)->default('')->comment('文件名');
			$table->string('suffix', 20)->default('')->comment('后缀文件扩展名');
			$table->string('size', 30)->default('0')->comment('文件大小');
			$table->string('url')->default('')->comment('文件路劲');
			$table->boolean('status')->default(1)->comment('状态默认１正常');
			$table->boolean('classify')->default(0)->comment('文件分类');
			$table->boolean('system')->default(0)->comment('所属系统');
			$table->integer('user')->unsigned()->default(0)->comment('上传用户');
			$table->dateTime('created_at')->default('0000-00-00 00:00:00')->comment('上传时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('upload_file_info');
	}

}
