<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productreviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productreviews', function (Blueprint $table) {
            $table->increments('id')->autoIncrement(5);
            $table->integer('productId')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('price')->nullable();
            $table->integer('value')->nullable();
            $table->string('name',255)->nullable();
            $table->string('summary',255)->nullable();
            $table->longText('review');
            $table->timestamp('reviewDate')->nullable(false)->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productreviews');
    }
}
