<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgCollectInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sg_collect_info', function(Blueprint $table)
		{
			$table->increments('collect_id')->comment('专题ID');
			$table->string('collect_title')->comment('专题名称');
			$table->string('collect_keywords', 100)->index('collect_keywords')->comment('专题关键词');
			$table->string('collect_desc', 300)->comment('专题描述');
			$table->integer('userid')->unsigned()->default(0)->comment('添加者（old）');
			$table->string('collect_pic')->comment('专题缩略图');
			$table->boolean('collect_status')->default(0)->index('collect_status')->comment('专题审核状态 0');
			$table->boolean('comment_flag')->default(1)->comment('是否允许评论0 不允许 1 允许');
			$table->timestamp('update_time')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('更新时间');
			$table->timestamp('create_time')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('创建时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sg_collect_info');
	}

}
