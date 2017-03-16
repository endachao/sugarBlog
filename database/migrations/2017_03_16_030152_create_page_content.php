<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sg_page_content', function (Blueprint $table) {
            $table->increments('id')->comment('主键');
            $table->integer('page_id')->default(0)->comment('pages 的主键');
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
        Schema::drop('sg_page_content');
    }
}
