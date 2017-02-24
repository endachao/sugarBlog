<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSgNavSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sg_nav_setting', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nav_name')->default('')->comment('导航名称');
            $table->tinyInteger('nav_type')->default(1)->comment('导航来源 1：手动添加 2：来自标签 3：来自分类');
            $table->string('nav_url')->default('')->comment('导航地址');
            $table->tinyInteger('nav_status')->default(0)->comment('是否显示 0：不显示 1：显示');
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
        Schema::dropIfExists('sg_nav_setting');
    }
}
