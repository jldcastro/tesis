<?php

namespace App\Http\Controllers;

use App\Nombre;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NombresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //presenta la lista y paginación de nombres
    public function __construct()
    {
        $this->middleware('auth');
    }

    //presenta el formulario para nuevo nombre
    public function nuevo_nombre()
    {
        return view('formularios.mantenedores.nombres.nuevo_nombre');
    }

    public function lista_nombres()
    {
        $nombres= Nombre::paginate(10);
        return view('formularios.mantenedores.nombres.lista_nombres')->with("nombres", $nombres );
    }

    //Formulario para nuevo nombre equipo
    public function crear_nombre()
    {

        $data=Request::all();

        $nombre= new Nombre;
        $nombre->equipo=$data["equipo"];

        $resultado= $nombre->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","Nombre Equipo Registrado Exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");
        }
    }

    public function editar_nombre($id)
    {
        //funcion para mostrar los datos de un equipo
        $nombre=Nombre::find($id);
        $contador=count($nombre);
        if($contador>0){
            return view("formularios.mantenedores.nombres.editar_nombre")->with("nombre",$nombre);
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","El nombre no existe o fue borrado");
        }
    }

    public function actualizar_nombre(Request $request)
    {

        $data=$request::all();
        $idNombre=$data["id_nombre"];
        $nombre=Nombre::find($idNombre);

        $nombre->equipo=$data["equipo"];

        $resultado= $nombre->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","El nombre del equipo fue actualizado exitósamente");
        }
        else
        {

            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");

        }
    }

    public function eliminar_nombre($id)
    {

        $nombre = Nombre::find($id);
        $resultado = $nombre->delete();

        if ($resultado) {
            return view("mensajes.correcto")->with("mensaje", "El nombre del equipo fue eliminado exitósamente");
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "Hubo un error vuelva a intentarlo");
        }
    }
}
