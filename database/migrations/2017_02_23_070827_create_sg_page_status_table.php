<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgPageStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sg_page_status', function(Blueprint $table)
		{
			$table->increments('id')->comment('主键');
			$table->integer('page_id')->default(0)->comment('pages表主键');
			$table->integer('pv')->default(0)->comment('页面 pv');
			$table->integer('uv')->default(0)->comment('页面 uv');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sg_page_status');
	}

}
