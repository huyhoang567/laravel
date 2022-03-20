<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->autoIncrement(4);
            $table->string('name',255)->nullable();
            $table->string('email',255)->nullable();
            $table->bigInteger('contactno')->nullable();
            $table->string('password',255)->nullable();
            $table->longText('shippingAddress');
            $table->string('shippingState',255)->nullable();
            $table->string('shippingCity',255)->nullable();
            $table->integer('shippingPincode')->nullable();
            $table->longText('billingAddress');
            $table->string('billingState',255)->nullable();
            $table->string('billingCity',255)->nullable();
            $table->integer('billingPincode')->nullable();
            $table->timestamp('regDate')->nullable(false)->useCurrent()->useCurrentOnUpdate();
            $table->string('updationDate',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
