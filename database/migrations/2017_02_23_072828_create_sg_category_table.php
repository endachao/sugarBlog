<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sg_category', function(Blueprint $table)
		{
			$table->increments('id')->comment('分类id');
			$table->string('name', 30)->default('')->comment('分类名称');
			$table->string('slug', 30)->default('')->comment('分类别名');
			$table->integer('parent_id')->comment('父节点');
			$table->boolean('status')->default(1)->comment('分类状态 0=>未启用 1=>已启用');
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
		Schema::drop('sg_category');
	}

}
