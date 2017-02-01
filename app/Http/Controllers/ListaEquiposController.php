<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListaEquipo;
use App\Equipo;
use App\Nombre;
use App\Marca;
use App\Ubicacion;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListaEquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    //presenta la lista y paginación de equipos
    public function listas_equipos()
    {
        $nombres = Nombre::all();
        $marcas = Marca::all();
        $ubicaciones = Ubicacion::all();
        $equipos= Equipo::paginate(10);
        return view('formularios.f5.listas_equipos')->with("equipos", $equipos )->with("nombres",$nombres)->with("marcas",$marcas)->with("ubicaciones",$ubicaciones);
    }
}
