<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->id('id');
            $table->text('fecha');
            $table->text('curso_actividad_expediente');
            $table->text('escrito');
            $table->text('proximo_paso');
            $table->text('preparado_por');
            $table->text('controlado_por');
            $table->text('supervision');
            $table->unsignedBigInteger('id_expediente');
            $table->foreign('id_expediente')->references('id')->on('expedientes');
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
        Schema::drop('seguimientos');
    }
}
