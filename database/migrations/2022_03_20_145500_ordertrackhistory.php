<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ordertrackhistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordertrackhistory', function (Blueprint $table) {
            $table->increments('id')->autoIncrement(5);
            $table->integer('orderId')->nullable();
            $table->string('productId',255)->nullable();
            $table->integer('quantity')->nullable();
            // $table->string('status',255)->nullable();
            // $table->mediumText('remark');
            // $table->timestamp('postingDate')->nullable(false)->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordertrackhistory');
    }
}
