<?php

namespace App\Http\Controllers;

use App\Equipo;
use Request;

class EquiposController extends Controller
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

    //presenta el formulario para nuevo equipo
    public function nuevo_equipo()
    {
        return view('formularios.f4.nuevo_equipo');
    }

    //presenta la lista y paginación de usuarios
    public function lista_equipos()
    {
        $equipos= Equipo::paginate(10);
        return view('formularios.f4.lista_equipos')->with("equipos", $equipos );
    }

    //Formulario para nuevo usuario
    public function crear_equipo()
    {

        $data=Request::all();

        $equipo= new Equipo;
        $equipo->equipo=$data["equipo"];
        $equipo->marca_modelo=$data["marca_modelo"];

        $resultado= $equipo->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","Equipo Registrado Exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");
        }
    }
}
