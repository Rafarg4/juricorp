<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGastoExpedientesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gasto_expedientes', function (Blueprint $table) {
            $table->id('id');
            $table->text('concepto_gasto');
            $table->text('monto_gasto');
            $table->text('fecha_gasto');
             $table->unsignedBigInteger('id_expediente');
            $table->text('archivo_gasto');
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
        Schema::drop('gasto_expedientes');
    }
}
