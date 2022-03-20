<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Category extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id')->autoIncrement(7);
            $table->string('categoryName',255)->nullable();
            $table->longText('categoryDescription');
            $table->timestamp('creationDate')->nullable(false)->useCurrent()->useCurrentOnUpdate();
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
         Schema::dropIfExists('category');
    }
}
