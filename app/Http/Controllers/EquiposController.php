<?php

namespace App\Http\Controllers;

use App\Equipo;
use Storage;
use Request;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\Validator;

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

    public function eliminar_equipo($id)
    {

        $equipo = Equipo::find($id);
        $resultado = $equipo->delete();

        if ($resultado) {
            return view("mensajes.correcto")->with("mensaje", "Usuario eliminado exitósamente");
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "Hubo un error vuelva a intentarlo");
        }
    }

    public function imagen_equipo(Request $request)
    {

        $id = $request::input('equipo_foto');
        $archivo = $request::file('archivo');
        $input = array('image' => $archivo);
        $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif|max:2000');
        $validacion = Validator::make($input, $reglas);
        if ($validacion->fails()) {
            return view("mensajes.incorrecto")->with("mensaje", "El archivo no es una imagen válida");
        } else {

            $nombre_original = $archivo->getClientOriginalName();
            $extension = $archivo->getClientOriginalExtension();
            $nuevo_nombre = "equipo-" . $id . "." . $extension;
            $r1 = Storage::disk('fotoequipos')->put($nuevo_nombre, \File::get($archivo));
            $ruta = "imagenes/f4/" . $nuevo_nombre;

            if ($r1) {

                $equipo = Equipo::find($id);
                $equipo->foto = $ruta;
                $r2 = $equipo->save();
                return view("mensajes.correcto")->with("mensaje", "Imagen de equipo agregada correctamente");
            } else {


            }
        }
    }

    public function descargar_word($id)
    {
        $templateWord = new TemplateProcessor('word/F4 - Hoja de vida de equipos.docx');

        $resultado = Equipo::find($id);

        $templateWord->setValue('equipo', $resultado->equipo);
        $templateWord->setValue('marca_modelo', $resultado->marca_modelo);
        $templateWord->setValue('nserie', $resultado->nserie);
        $templateWord->setValue('cod_interno', $resultado->cod_interno);
        $templateWord->setValue('capacidad', $resultado->capacidad);
        $templateWord->setValue('clase_oiml', $resultado->clase_oiml);
        $templateWord->setValue('error_max', $resultado->error_max);
        $templateWord->setValue('lugar_almacenamiento', $resultado->lugar_almacenamiento);
        $templateWord->setValue('fcompra', $resultado->fcompra);
        $templateWord->setValue('norden_compra', $resultado->norden_compra);
        $templateWord->setValue('proveedor', $resultado->proveedor);
        $templateWord->setValue('intervalo_mantenimiento', $resultado->intervalo_mantenimiento);
        $templateWord->setValue('fecha_mantenimiento', $resultado->fecha_mantenimiento);
        $templateWord->setValue('avisar', $resultado->avisar);
        $templateWord->setValue('pauta_mantencion', $resultado->pauta_mantencion);
        $templateWord->setValue('intervalo_calibracion', $resultado->intervalo_calibracion);
        $templateWord->setValue('intervalo_verificacion', $resultado->intervalo_verificacion);
        $templateWord->setValue('criterio_aceptacion', $resultado->criterio_aceptacion);
        $templateWord->setValue('observaciones', $resultado->observaciones);
        $templateWord->setValue('actividad', $resultado->actividad);
        $templateWord->setValue('f_realizacion', $resultado->f_realizacion);
        $templateWord->setValue('f_proxima', $resultado->f_proxima);
        $templateWord->setValue('realizado_por', $resultado->realizado_por);
        $templateWord->setValue('ncertificado', $resultado->ncertificado);
        $templateWord->setValue('observacion', $resultado->observacion);

        $templateWord->saveAs('word/f4/equipo'.$id.'.docx');
        header("Content-Disposition: attachment; filename=equipo" .$id . ".docx; charset=iso-8859-1");
    }
}
