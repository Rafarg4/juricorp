<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoExpedientesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_expedientes', function (Blueprint $table) {
            $table->id('id');
            $table->text('concepto');
            $table->text('monto');
            $table->text('fecha');
            $table->text('archivo')->nullable();
             $table->unsignedBigInteger('id_expediente');
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
        Schema::drop('pago_expedientes');
    }
}
