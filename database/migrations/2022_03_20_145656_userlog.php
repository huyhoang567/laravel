<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Userlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userlog', function (Blueprint $table) {
            $table->increments('id')->autoIncrement(24);
            $table->string('userEmail',255)->nullable();
            $table->binary('userip')->nullable();
            $table->timestamp('logintime')->nullable()->useCurrent()->useCurrentOnUpdate();
            $table->string('logout',255)->nullable();
            $table->integer('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userlog');
    }
}
