<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersEquippedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_equipped', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignUuid('user_id');
            $table->integer('weapon')->nullable();
            $table->integer('armor')->nullable();
            $table->integer('shield')->nullable();
            $table->integer('pet')->nullable();
            $table->integer('effect')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_equipped');
    }
}
