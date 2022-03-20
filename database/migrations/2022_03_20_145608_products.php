<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->autoIncrement(21);
            $table->integer('category')->nullable(false);
            $table->integer('subCategory')->nullable();
            $table->string('productName',255)->nullable();
            $table->string('productCompany',255)->nullable();;
            $table->integer('productPrice')->nullable();
            $table->integer('productPriceBeforeDiscount')->nullable();
            $table->longText('productDescription');
            $table->string('productImage1',255)->nullable();
            $table->string('productImage2',255)->nullable();
            $table->string('productImage3',255)->nullable();
            $table->integer('shippingCharge')->nullable();
            $table->string('productAvailability',255)->nullable();
            $table->timestamp('postingDate')->nullable()->useCurrent()->useCurrentOnUpdate();
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
        Schema::dropIfExists('products');
    }
}
