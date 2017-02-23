<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sg_comments', function(Blueprint $table)
		{
			$table->increments('id')->comment('主键');
			$table->string('email', 20)->default('')->comment('邮箱地址');
			$table->string('username', 20)->comment('昵称');
			$table->integer('ip')->comment('评论 ip');
			$table->integer('el_id')->default(0)->comment('评论对象id');
			$table->boolean('type_id')->default(0)->comment('评论类型 1=>文章 2=>单页面 3=>作者 4=>专题');
			$table->integer('parent_id')->default(0)->comment('上层评论id，顶层=>0');
			$table->boolean('status')->default(0)->comment('评论状态 0=>屏蔽 1=>正常');
			$table->string('content', 300)->default('')->comment(' 评论内容');
			$table->timestamp('create_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('评论时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sg_comments');
	}

}
