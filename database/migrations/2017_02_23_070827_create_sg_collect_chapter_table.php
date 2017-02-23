<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgCollectChapterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sg_collect_chapter', function(Blueprint $table)
		{
			$table->increments('chapter_id')->comment('章节ID');
			$table->string('chapter_name', 50)->comment('章节名');
			$table->integer('collect_id')->unsigned()->default(0)->comment('所属专题');
			$table->integer('order_key')->nullable()->default(0)->comment('排序');
			$table->index(['collect_id','order_key'], 'collect_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sg_collect_chapter');
	}

}
