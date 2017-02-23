<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sg_tags', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('标签id');
			$table->string('name', 30)->default('')->comment('标签名称');
			$table->boolean('status')->default(1)->comment('标签状态 0=>未启用 1=>已启用 ');
			$table->timestamp('create_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('创建时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sg_tags');
	}

}
