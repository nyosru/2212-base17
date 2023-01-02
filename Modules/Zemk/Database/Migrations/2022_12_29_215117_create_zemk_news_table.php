<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZemkNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('zemk_news');
        Schema::create('zemk_news', function (Blueprint $table) {
            $table->id();

            $table->string('head');
            $table->date('date');
            $table->text('opis_small')->nullable();
            $table->text('opis')->nullable();
            

            // $table->integer('autor_origin')->nullable();
            $table->string('site_origin')->nullable();

            $table->timestamps();
            $table->softDeletes();


            // $table->integer('autor_id')->unsigned();

            // // $table->foreign('autor_id')
            // $table->foreignId('autor_id')
            // $table->foreignId('zemk_userautor_id')
            $table->foreignId('author_id')
            // // $table->bigInteger('autor_id')
                ->references('id')
                ->on('zemk_users')
                ->constrained('zemk_users')
            //     ->cascadeOnDelete()
                ->nullable()
                ->onDelete('cascade')
            //     ->unsigned()
            //     // // ->default(1)
                ;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zemk_news');
    }
}
