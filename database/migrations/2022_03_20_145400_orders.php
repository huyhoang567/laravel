<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->autoIncrement(7);
            $table->integer('userId')->nullable();
            // $table->string('productId',255)->nullable();
            // $table->integer('quantity')->nullable();
            $table->timestamp('orderDate')->nullable(false)->useCurrent()->useCurrentOnUpdate();
            $table->string('paymentMethod',50)->nullable();
            $table->string('orderStatus',55)->nullable();
            $table->mediumText('remark');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
