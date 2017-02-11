<?php

namespace App\Http\Controllers;

use App\Actividad;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ActividadesController extends Controller
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

    //presenta el formulario para nueva actividad equipo
    public function nueva_actividad()
    {
        return view('formularios.mantenedores.actividades.nueva_actividad');
    }

    public function lista_actividades()
    {
        $actividades= Actividad::paginate(10);
        return view('formularios.mantenedores.actividades.lista_actividades')->with("actividades", $actividades );
    }

    //Formulario para nueva actividad equipo
    public function crear_actividad()
    {

        $data=Request::all();

        $actividad= new Actividad;
        $actividad->nombre=$data["nombre"];

        $resultado= $actividad->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","Actividad del Equipo Registrado Exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");
        }
    }

    public function editar_actividad($id)
    {
        //funcion para editar los datos de una actividad
        $actividad=Actividad::find($id);
        $contador=count($actividad);
        if($contador>0){
            return view("formularios.mantenedores.actividades.editar_actividad")->with("actividad",$actividad);
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","La actividad no existe o fue borrada");
        }
    }

    public function actualizar_actividad(Request $request)
    {

        $data=$request::all();
        $idActividad=$data["id_actividad"];
        $actividad=Actividad::find($idActividad);

        $actividad->nombre=$data["nombre"];

        $resultado= $actividad->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","La actividad del equipo fue actualizado exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");
        }
    }

    public function eliminar_actividad($id)
    {

        $actividad = Actividad::find($id);
        $resultado = $actividad->delete();

        if ($resultado) {
            return view("mensajes.correcto")->with("mensaje", "La actividad del equipo fue eliminado exitósamente");
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "Hubo un error vuelva a intentarlo");
        }
    }
}
