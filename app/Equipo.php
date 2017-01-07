<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = ['equipo', 'marca_modelo','nserie','cod_interno','capacidad','clase_oiml','error_max','lugar_almacenamiento'];
}
