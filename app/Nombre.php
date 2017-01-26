<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nombre extends Model
{
    protected $table = 'nombres';

    public function equipo()
    {
        return $this->hasMany('App\Equipo');
    }
}


