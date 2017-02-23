<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgPageInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sg_page_info', function(Blueprint $table)
		{
			$table->increments('id')->comment('主键');
			$table->integer('page_id')->default(0)->comment('pages 的主键');
			$table->string('seo_keywords', 60)->comment('seo 关键字');
			$table->string('seo_desc', 60)->comment('seo 页面描述');
			$table->text('content', 65535)->comment('页面内容');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sg_page_info');
	}

}
