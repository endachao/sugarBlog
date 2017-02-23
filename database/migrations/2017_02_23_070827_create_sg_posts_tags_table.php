<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgPostsTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sg_posts_tags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('post_id')->unsigned()->default(0)->comment('文章ID');
			$table->integer('tag_id')->unsigned()->default(0)->comment('标签ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sg_posts_tags');
	}

}
