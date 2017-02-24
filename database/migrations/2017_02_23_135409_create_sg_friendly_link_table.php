<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSgFriendlyLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sg_friendly_link', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link_name', 20)->default('')->comment('链接名称');
            $table->string('link_url')->default('')->comment('链接地址');
            $table->tinyInteger('link_status')->default(0)->comment('是否显示 0：不显示 1：显示');
            $table->integer('user_id')->default(0)->comment('添加的账户id');

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
        Schema::dropIfExists('sg_friendly_link');
    }
}
