<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = 'ubicaciones';

    public function equipo()
    {
        return $this->hasMany('App\Equipo');
    }
}
