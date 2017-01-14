<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateF37Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f37', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha_solicitud');
            $table->string('vendedor');
            $table->string('cliente');
            $table->string('comuna_servicio');
            $table->string('lugar_servicio');
            $table->rememberToken();
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
        Schema::drop('f37');
    }
}
