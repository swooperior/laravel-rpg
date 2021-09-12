<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTableAddOpts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('isAdmin')->default(false);
            $table->integer('silver')->default(100);
            $table->integer('gold')->default(0);
            $table->integer('exp')->default(0);
            $table->integer('level')->default(1);
            $table->integer('hp')->default(100);
            $table->integer('energy')->default(100);
            $table->integer('attack')->default(1);
            $table->integer('defence')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('isAdmin');
            $table->dropColumn('silver');
            $table->dropColumn('gold');
            $table->dropColumn('exp');
            $table->dropColumn('level');
            $table->dropColumn('hp');
            $table->dropColumn('energy');
            $table->dropColumn('attack');
            $table->dropColumn('defence');
        });
    }
}
