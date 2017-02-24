<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSgSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sg_setting', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key')->default('')->comment('设置类型 general_setting : 通用设置，email_setting 邮件设置');
            $table->string('value')->default('')->comment('对应设置的json');

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
        Schema::dropIfExists('sg_setting');
    }
}
