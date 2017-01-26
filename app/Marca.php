<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';

    public function equipo()
    {
        return $this->hasMany('App\Equipo');
    }
}
