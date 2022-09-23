<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id');
            $table->text('nombre');
            $table->text('apellido');
            $table->text('ci');
            $table->text('fecha_nacimiento');
            $table->text('nacionalidad');
            $table->text('distrito_origen');
            $table->text('domicilio_particular');
            $table->text('numero_casa');
            $table->text('barrio');
            $table->text('ciudad');
            $table->text('numero_telefono');
            $table->text('email');
            $table->text('rede_social');
            $table->text('nombre_apellido_coyuge');
            $table->text('ci_coyuge');
            $table->text('empresa_otro');
            $table->text('direccion');
            $table->text('numero_casa_laboral');
            $table->text('telefono_fijo');
            $table->text('telefono_laboral');
            $table->text('email_laboral');
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
        Schema::drop('clientes');
    }
}
