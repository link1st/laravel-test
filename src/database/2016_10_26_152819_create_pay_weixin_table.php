<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayWeixinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_weixin', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id')->unique()->comment('驾校Id');
            $table->string('seller_id',50)->comment('账号');
            $table->string('app_id',18)->comment('应用号');
            $table->string('app_secret',32)->comment('应用秘钥');
            $table->string('mac_id',10)->comment('商户号');
            $table->string('key',32)->comment('API秘钥');
            $table->string('apiclient_cert',50)->comment('公钥');
            $table->string('apiclient_key',50)->comment('秘钥');
            $table->tinyInteger('status')->comment('状态');
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
        Schema::drop('pay_weixin');
    }
}
