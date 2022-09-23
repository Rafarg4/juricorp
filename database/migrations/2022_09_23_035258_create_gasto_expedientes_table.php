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
            $table->text('concepto');
            $table->text('monto');
            $table->text('fecha');
             $table->unsignedBigInteger('id_expediente');
            $table->text('archivo');
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
