<?php

namespace App\Http\Controllers;

use App\Ubicacion;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UbicacionesController extends Controller
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

    //presenta el formulario para nueva ubicacion equipo
    public function nueva_ubicacion()
    {
        return view('formularios.mantenedores.ubicaciones.nueva_ubicacion');
    }

    public function lista_ubicaciones()
    {
        $ubicaciones= Ubicacion::paginate(10);
        return view('formularios.mantenedores.ubicaciones.lista_ubicaciones')->with("ubicaciones", $ubicaciones );
    }

    //Formulario para nueva ubicacion equipo
    public function crear_ubicacion()
    {

        $data=Request::all();

        $ubicacion= new Ubicacion;
        $ubicacion->lugar_almacenamiento=$data["lugar_almacenamiento"];

        $resultado= $ubicacion->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","Lugar almacenamiento de Equipo Registrado Exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");
        }
    }

    public function editar_ubicacion($id)
    {
        //funcion para editar los datos de un lugar de almacenamiento
        $ubicacion=Ubicacion::find($id);
        $contador=count($ubicacion);
        if($contador>0){
            return view("formularios.mantenedores.ubicaciones.editar_ubicacion")->with("ubicacion",$ubicacion);
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","La ubicación no existe o fue borrada");
        }
    }

    public function actualizar_ubicacion(Request $request)
    {

        $data=$request::all();
        $idUbicacion=$data["id_ubicacion"];
        $ubicacion=Ubicacion::find($idUbicacion);

        $ubicacion->lugar_almacenamiento=$data["lugar_almacenamiento"];

        $resultado= $ubicacion->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","El lugar de almacenamiento del equipo fue actualizado exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");
        }
    }

    public function eliminar_ubicacion($id)
    {

        $ubicacion = Ubicacion::find($id);
        $resultado = $ubicacion->delete();

        if ($resultado) {
            return view("mensajes.correcto")->with("mensaje", "El lugar de almacenamiento del equipo fue eliminado exitósamente");
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "Hubo un error vuelva a intentarlo");
        }
    }
}
