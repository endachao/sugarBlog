<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sg_posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 200)->default('')->comment('文章标题');
			$table->string('desc', 200)->default('')->comment('文章描述');
			$table->string('keywords', 200)->default('')->comment('关键词');
			$table->text('content', 65535)->nullable()->comment('内容');
			$table->integer('category_id')->unsigned()->default(0)->comment('分类ID');
			$table->integer('is_del')->unsigned()->default(0)->comment('0：正常1：已删除');
			$table->integer('is_publish')->unsigned()->default(0)->comment('0：未发布1：已发布');
			$table->char('primary_code', 10)->default('')->comment('查看密码');
			$table->integer('uid')->unsigned()->default(0)->comment('作者ID');
			$table->integer('views')->unsigned()->default(0)->comment('查看次数');
			$table->integer('likes')->unsigned()->default(0)->comment('赞');
			$table->integer('comments')->unsigned()->default(0)->comment('评论次数');
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
		Schema::drop('sg_posts');
	}

}
