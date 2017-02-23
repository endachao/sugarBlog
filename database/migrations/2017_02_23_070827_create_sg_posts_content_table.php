<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgPostsContentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sg_posts_content', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('post_id')->unsigned()->default(0)->comment('文章ID');
			$table->smallInteger('editor_type')->unsigned()->default(0)->comment('编辑器类型0：markdown');
			$table->text('content', 65535)->comment('文章内容');
			$table->smallInteger('is_draft')->unsigned()->default(1)->comment('0：非草稿1：草稿');
			$table->smallInteger('is_del')->unsigned()->default(0)->comment('0：正常1：删除');
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
		Schema::drop('sg_posts_content');
	}

}
