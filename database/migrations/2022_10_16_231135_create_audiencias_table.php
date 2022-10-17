<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudienciasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audiencias', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_expediente');
            $table->text('inicio_audiencia');
            $table->text('fin_audiencia');
            $table->text('descripcion_audiencia');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_expediente')->references('id')->on('expedientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('audiencias');
    }
}
