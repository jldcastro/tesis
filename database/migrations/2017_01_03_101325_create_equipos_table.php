<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idNombre')->unsigned()->nullable();
            $table->foreign('idNombre')->references('id')->on('nombres')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('idMarca')->unsigned()->nullable();
            $table->foreign('idMarca')->references('id')->on('marcas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nserie');
            $table->string('cod_interno');
            $table->string('capacidad');
            $table->string('clase_oiml');
            $table->float('error_max');
            $table->integer('idUbicacion')->unsigned()->nullable();
            $table->foreign('idUbicacion')->references('id')->on('ubicaciones')->onDelete('cascade')->onUpdate('cascade');
            $table->date('fcompra');
            $table->string('norden_compra');
            $table->string('proveedor');
            $table->string('intervalo_mantenimiento');
            $table->date('fecha_mantenimiento');
            $table->string('avisar');
            $table->string('pauta_mantencion');
            $table->string('intervalo_calibracion');
            $table->string('intervalo_verificacion');
            $table->string('criterio_aceptacion');
            $table->mediumText('observaciones');
            $table->string('actividad');
            $table->date('f_realizacion');
            $table->date('f_proxima');
            $table->string('realizado_por');
            $table->string('ncertificado');
            $table->mediumText('observacion');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('equipos');
    }
}
