<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuzgadosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juzgados', function (Blueprint $table) {
            $table->id('id');
            $table->text('nombrejuz');
            $table->text('juez');
            $table->text('secretario');
            $table->unsignedBigInteger('id_circunscripcion');
            $table->foreign('id_circunscripcion')->references('id')->on('circunscripcions');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('juzgados');
    }
}
