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
