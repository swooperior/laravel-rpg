<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->boolean('isConsumable')->default(0);
            $table->integer('rarity')->default(1);
            $table->integer('levelreq')->default(1);
            $table->integer('slot');
            $table->integer('atkup')->default(0);
            $table->integer('defup')->default(0);
            $table->integer('hpup')->default(0);
            $table->integer('energyup')->default(0);
            $table->string('imgpath')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
