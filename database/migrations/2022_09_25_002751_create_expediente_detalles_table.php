<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedienteDetallesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expediente_detalles', function (Blueprint $table) {
            $table->id('id');
           $table->unsignedBigInteger('id_expediente');
            $table->unsignedBigInteger('id_cliente');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_cliente')->references('id')->on('clientes');
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
        Schema::drop('expediente_detalles');
    }
}
