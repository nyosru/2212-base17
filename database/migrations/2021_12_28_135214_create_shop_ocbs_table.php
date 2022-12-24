<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopOcbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_ocbs', function (Blueprint $table) {
            $table->id();

            $table->string('vypal')->nullable();
            $table->string('nomerSceta')->nullable();
            $table->string('naimenovanie')->nullable();
            $table->string('firma')->nullable();
            $table->string('debetNaNacloPerioda')->nullable();
            $table->string('kreditNaNacloPerioda')->nullable();
            $table->string('oborotDebet')->nullable();
            $table->string('oborotKredit')->nullable();
            $table->string('debetNaKonecPerioda')->nullable();
            $table->string('kreditNaKonecPerioda')->nullable();
            $table->string('dviz', 150);
            $table->string('foto', 150);
            $table->string('zateya', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_ocbs');
    }
}
