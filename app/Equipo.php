<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

    //protected $fillable = ['idNombre', 'idMarca','nserie','cod_interno','capacidad','clase_oiml','error_max','idUbicacion','fcompra','norden_compra','proveedor','intervalo_mantenimiento','fecha_mantenimiento','avisar','pauta_mantencion','intervalo_calibracion','intervalo_verificacion','criterio_aceptacion','observaciones','actividad','f_realizacion','f_proxima','realizado_por','ncertificado','observacion'];

    public function nombre()
    {
        return $this->hasOne('App\Nombre','id','idNombre');
    }

    public function marca()
    {
        return $this->hasOne('App\Marca','id','idMarca');
    }

    public function ubicacion()
    {
        return $this->hasOne('App\Ubicacion','id','idUbicacion');
    }
}
