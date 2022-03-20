<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subcategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategory', function (Blueprint $table) {
            $table->increments('id')->autoIncrement(13);
            $table->integer('categoryid')->nullable();
            $table->string('subcategory',255)->nullable();
            $table->integer('quantity')->nullable();
            $table->timestamp('creationDate')->nullable()->useCurrent()->useCurrentOnUpdate();
            $table->string('updationDate',50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategory');
    }
}
