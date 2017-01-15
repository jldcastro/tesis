<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = ['equipo', 'marca_modelo','nserie','cod_interno','capacidad','clase_oiml','error_max','lugar_almacenamiento','fcompra','norden_compra','proveedor','intervalo_mantenimiento','fecha_mantenimiento','avisar','pauta_mantencion','intervalo_calibracion','intervalo_verificacion','criterio_aceptacion','observaciones','actividad','f_realizacion','f_proxima','realizado_por','ncertificado','observacion'];
}
