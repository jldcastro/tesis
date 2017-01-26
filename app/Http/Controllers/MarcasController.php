<?php

namespace App\Http\Controllers;

use App\Marca;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MarcasController extends Controller
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

    //presenta el formulario para nueva marca equipo
    public function nueva_marca()
    {
        return view('formularios.mantenedores.marcas.nueva_marca');
    }

    public function lista_marcas()
    {
        $marcas= Marca::paginate(10);
        return view('formularios.mantenedores.marcas.lista_marcas')->with("marcas", $marcas );
    }

    //Formulario para nueva marca equipo
    public function crear_marca()
    {

        $data=Request::all();

        $marca= new Marca;
        $marca->marca_modelo=$data["marca_modelo"];

        $resultado= $marca->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","Marca/Modelo Equipo Registrado Exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");
        }
    }

    public function editar_marca($id)
    {
        //funcion para mostrar los datos de una marca
        $marca=Marca::find($id);
        $contador=count($marca);
        if($contador>0){
            return view("formularios.mantenedores.marcas.editar_marca")->with("marca",$marca);
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","La marca no existe o fue borrado");
        }
    }

    public function actualizar_marca(Request $request)
    {

        $data=$request::all();
        $idMarca=$data["id_marca"];
        $marca=Marca::find($idMarca);

        $marca->marca_modelo=$data["marca_modelo"];

        $resultado= $marca->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","La marca/modelo del equipo fue actualizado exitósamente");
        }
        else
        {

            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");

        }
    }

    public function eliminar_marca($id)
    {

        $marca = Marca::find($id);
        $resultado = $marca->delete();

        if ($resultado) {
            return view("mensajes.correcto")->with("mensaje", "La marca/modelo del equipo fue eliminado exitósamente");
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "Hubo un error vuelva a intentarlo");
        }
    }
}
