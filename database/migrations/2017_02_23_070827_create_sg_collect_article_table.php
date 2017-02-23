<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgCollectArticleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sg_collect_article', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('collect_id')->unsigned()->default(0)->comment('专辑ID');
			$table->integer('chapter_id')->unsigned()->default(0)->comment('章节id');
			$table->integer('article_id')->unsigned()->default(0)->comment('文章ID');
			$table->integer('order_key')->unsigned()->default(0)->comment('排序');
			$table->timestamp('update_time')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('更新时间');
			$table->index(['collect_id','order_key'], 'collect_id');
			$table->index(['chapter_id','order_key'], 'chapter_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sg_collect_article');
	}

}
