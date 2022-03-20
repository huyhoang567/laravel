<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id')->autoIncrement(2);
            $table->string('username',255)->nullable(false);
            $table->string('password',255)->nullable(false);
            $table->timestamp('creationDate')->nullable(false)->useCurrent()->useCurrentOnUpdate();
            $table->string('updationDate',255)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
