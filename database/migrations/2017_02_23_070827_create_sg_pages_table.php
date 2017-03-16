<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sg_pages', function(Blueprint $table)
		{
			$table->increments('id')->comment('主键');
			$table->string('title', 30)->default('')->comment('标题');
			$table->boolean('status')->default(0)->comment('状态 0=>未发布 1=>已发布');
			$table->string('seo_keywords', 60)->comment('seo 关键字');
			$table->string('seo_desc', 60)->comment('seo 页面描述');
			$table->timestamp('create_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('创建时间');
			$table->timestamp('update_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('更新时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sg_pages');
	}

}
