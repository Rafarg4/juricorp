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
            $table->text('nacionalidad')->nullable();
            $table->text('distrito_origen')->nullable();
            $table->text('domicilio_particular')->nullable();
            $table->text('numero_casa')->nullable();
            $table->text('barrio')->nullable();
            $table->text('ciudad')->nullable();
            $table->text('numero_telefono')->nullable();
            $table->text('email')->nullable();
            $table->text('rede_social')->nullable();
            $table->text('nombre_apellido_coyuge')->nullable();
            $table->text('ci_coyuge')->nullable();
            $table->text('empresa_otro')->nullable();
            $table->text('direccion')->nullable();
            $table->text('numero_casa_laboral')->nullable();
            $table->text('telefono_fijo')->nullable();
            $table->text('telefono_laboral')->nullable();
            $table->text('email_laboral')->nullable();
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
