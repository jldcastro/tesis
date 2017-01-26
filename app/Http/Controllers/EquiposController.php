<?php

namespace App\Http\Controllers;

use App\Equipo;
use App\Nombre;
use App\Marca;
use App\Ubicacion;
use Storage;
use Illuminate\Http\Request;
use App\Http\Requests;
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
        $nombres = Nombre::all();
        $marcas = Marca::all();
        $ubicaciones = Ubicacion::all();
        return view('formularios.f4.nuevo_equipo')->with("nombres",$nombres)->with("marcas",$marcas)->with("ubicaciones",$ubicaciones);
    }

    //presenta la lista y paginación de equipos
    public function lista_equipos()
    {
        $nombres = Nombre::all();
        $marcas = Marca::all();
        $ubicaciones = Ubicacion::all();
        $equipos= Equipo::paginate(10);
        return view('formularios.f4.lista_equipos')->with("equipos", $equipos )->with("nombres",$nombres)->with("marcas",$marcas)->with("ubicaciones",$ubicaciones);
    }

    //Formulario para nuevo usuario
    public function crear_equipo(Request $request)
    {
        $equipo= new Equipo;
        $equipo->idNombre = $request->input("id_nombre");
        $equipo->idMarca = $request->input("id_marca");
        $equipo->nserie= $request->input("nserie");
        $equipo->cod_interno=$request->input("cod_interno");
        $equipo->capacidad=$request->input("capacidad");
        $equipo->clase_oiml=$request->input("clase_oiml");
        $equipo->error_max=$request->input("error_max");
        $equipo->idUbicacion = $request->input("id_ubicacion");
        $equipo->fcompra=$request->input("fcompra");
        $equipo->norden_compra=$request->input("norden_compra");
        $equipo->proveedor=$request->input("proveedor");
        $equipo->intervalo_mantenimiento=$request->input("intervalo_mantenimiento");
        $equipo->fecha_mantenimiento=$request->input("fecha_mantenimiento");
        $equipo->avisar=$request->input("avisar");
        $equipo->pauta_mantencion=$request->input("pauta_mantencion");
        $equipo->intervalo_calibracion=$request->input("intervalo_calibracion");
        $equipo->intervalo_verificacion=$request->input("intervalo_verificacion");
        $equipo->criterio_aceptacion=$request->input("criterio_aceptacion");
        $equipo->observaciones=$request->input("observaciones");
        $equipo->actividad=$request->input("actividad");
        $equipo->f_realizacion=$request->input("f_realizacion");
        $equipo->f_proxima=$request->input("f_proxima");
        $equipo->realizado_por=$request->input("realizado_por");
        $equipo->ncertificado=$request->input("ncertificado");
        $equipo->observacion=$request->input("observacion");

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

        $nombres = Nombre::all();
        $marcas = Marca::all();
        $ubicaciones = Ubicacion::all();
        $equipo=Equipo::find($id);

        $contador=count($equipo);
        if($contador>0){
            return view("formularios.f4.editar_equipo")->with("equipo",$equipo)->with("nombres",$nombres)->with("marcas",$marcas)->with("ubicaciones",$ubicaciones);;
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","El equipo no existe o fue borrado");
        }
    }

    public function actualizar_equipo(Request $request)
    {

        $idEquipo=$request->input("id_equipo");
        $equipo=Equipo::find($idEquipo);

        $equipo->idNombre = $request->input("id_nombre");
        $equipo->idMarca = $request->input("id_marca");
        $equipo->nserie= $request->input("nserie");
        $equipo->cod_interno=$request->input("cod_interno");
        $equipo->capacidad=$request->input("capacidad");
        $equipo->clase_oiml=$request->input("clase_oiml");
        $equipo->error_max=$request->input("error_max");
        $equipo->idUbicacion = $request->input("id_ubicacion");
        $equipo->fcompra=$request->input("fcompra");
        $equipo->norden_compra=$request->input("norden_compra");
        $equipo->proveedor=$request->input("proveedor");
        $equipo->intervalo_mantenimiento=$request->input("intervalo_mantenimiento");
        $equipo->fecha_mantenimiento=$request->input("fecha_mantenimiento");
        $equipo->avisar=$request->input("avisar");
        $equipo->pauta_mantencion=$request->input("pauta_mantencion");
        $equipo->intervalo_calibracion=$request->input("intervalo_calibracion");
        $equipo->intervalo_verificacion=$request->input("intervalo_verificacion");
        $equipo->criterio_aceptacion=$request->input("criterio_aceptacion");
        $equipo->observaciones=$request->input("observaciones");
        $equipo->actividad=$request->input("actividad");
        $equipo->f_realizacion=$request->input("f_realizacion");
        $equipo->f_proxima=$request->input("f_proxima");
        $equipo->realizado_por=$request->input("realizado_por");
        $equipo->ncertificado=$request->input("ncertificado");
        $equipo->observacion=$request->input("observacion");

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

        $id = $request->input('equipo_foto');
        $archivo = $request->file('archivo');
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
        $nombres = Nombre::all();
        $marcas = Marca::all();
        $ubicaciones = Ubicacion::all();
        $templateWord = new TemplateProcessor('word/F4 - Hoja de vida de equipos.docx');

        $resultado = Equipo::find($id);

        $templateWord->setValue('equipo', $resultado->nombre->equipo);
        $templateWord->setValue('marca_modelo', $resultado->marca->marca_modelo);
        $templateWord->setValue('nserie', $resultado->nserie);
        $templateWord->setValue('cod_interno', $resultado->cod_interno);
        $templateWord->setValue('capacidad', $resultado->capacidad);
        $templateWord->setValue('clase_oiml', $resultado->clase_oiml);
        $templateWord->setValue('error_max', $resultado->error_max);
        $templateWord->setValue('lugar_almacenamiento', $resultado->ubicacion->lugar_almacenamiento);
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
