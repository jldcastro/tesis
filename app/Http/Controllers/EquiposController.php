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
        $equipo->nserie=$data["nserie"];
        $equipo->cod_interno=$data["cod_interno"];
        $equipo->capacidad=$data["capacidad"];
        $equipo->clase_oiml=$data["clase_oiml"];
        $equipo->error_max=$data["error_max"];
        $equipo->lugar_almacenamiento=$data["lugar_almacenamiento"];
        $equipo->fcompra=$data["fcompra"];
        $equipo->norden_compra=$data["norden_compra"];
        $equipo->proveedor=$data["proveedor"];
        $equipo->intervalo_mantenimiento=$data["intervalo_mantenimiento"];
        $equipo->fecha_mantenimiento=$data["fecha_mantenimiento"];
        $equipo->avisar=$data["avisar"];
        $equipo->pauta_mantencion=$data["pauta_mantencion"];
        $equipo->intervalo_calibracion=$data["intervalo_calibracion"];
        $equipo->intervalo_verificacion=$data["intervalo_verificacion"];
        $equipo->criterio_aceptacion=$data["criterio_aceptacion"];
        $equipo->observaciones=$data["observaciones"];
        $equipo->actividad=$data["actividad"];
        $equipo->f_realizacion=$data["f_realizacion"];
        $equipo->f_proxima=$data["f_proxima"];
        $equipo->realizado_por=$data["realizado_por"];
        $equipo->ncertificado=$data["ncertificado"];
        $equipo->observacion=$data["observacion"];

        $resultado= $equipo->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","Equipo Registrado Exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");
        }
    }

    public function editar_equipo($id)
    {
        //funcion para mostrar los datos de un equipo
        $equipo=Equipo::find($id);
        $contador=count($equipo);
        if($contador>0){
            return view("formularios.f4.editar_equipo")->with("equipo",$equipo);
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","El equipo no existe o fue borrado");
        }
    }

    public function actualizar_equipo(Request $request)
    {

        $data=$request::all();
        $idEquipo=$data["id_equipo"];
        $equipo=Equipo::find($idEquipo);

        $equipo->equipo=$data["equipo"];
        $equipo->marca_modelo=$data["marca_modelo"];
        $equipo->nserie=$data["nserie"];
        $equipo->cod_interno=$data["cod_interno"];
        $equipo->capacidad=$data["capacidad"];
        $equipo->clase_oiml=$data["clase_oiml"];
        $equipo->error_max=$data["error_max"];
        $equipo->lugar_almacenamiento=$data["lugar_almacenamiento"];
        $equipo->fcompra=$data["fcompra"];
        $equipo->norden_compra=$data["norden_compra"];
        $equipo->proveedor=$data["proveedor"];
        $equipo->intervalo_mantenimiento=$data["intervalo_mantenimiento"];
        $equipo->fecha_mantenimiento=$data["fecha_mantenimiento"];
        $equipo->avisar=$data["avisar"];
        $equipo->pauta_mantencion=$data["pauta_mantencion"];
        $equipo->intervalo_calibracion=$data["intervalo_calibracion"];
        $equipo->intervalo_verificacion=$data["intervalo_verificacion"];
        $equipo->criterio_aceptacion=$data["criterio_aceptacion"];
        $equipo->observaciones=$data["observaciones"];
        $equipo->actividad=$data["actividad"];
        $equipo->f_realizacion=$data["f_realizacion"];
        $equipo->f_proxima=$data["f_proxima"];
        $equipo->realizado_por=$data["realizado_por"];
        $equipo->ncertificado=$data["ncertificado"];
        $equipo->observacion=$data["observacion"];

        $resultado= $equipo->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","Los datos del equipo fueron actualizados exitósamente");
        }
        else
        {

            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");

        }
    }


    public function mostrar_equipo($id)
    {
        //funcion para mostrar los datos de un equipo
        $equipo=Equipo::find($id);
        $contador=count($equipo);
        if($contador>0){
            return view("formularios.f4.mostrar_equipo")->with("equipo",$equipo);
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","El equipo no existe o fue borrado");
        }
    }
}
