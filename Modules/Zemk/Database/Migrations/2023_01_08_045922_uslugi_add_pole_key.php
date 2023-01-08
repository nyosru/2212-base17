<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UslugiAddPoleKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zemk_uslugis', function (Blueprint $table) {
            $table->string('key')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('zemk_uslugis', function (Blueprint $table) {
            $table->dropColumn('key');
        });
    }
}
