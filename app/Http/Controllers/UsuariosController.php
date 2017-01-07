<?php namespace App\Http\Controllers;

use App\User;
use Request;

class UsuariosController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

    //presenta el formulario para nuevo usuario
    public function nuevo_usuario()
    {
        return view('formularios.nuevo_usuario');
    }

    //presenta la lista y paginación de usuarios
    public function lista_usuarios()
    {
        $usuarios= User::paginate(10);
        return view('listas.lista_usuarios')->with("usuarios", $usuarios );
    }

    //Formulario para nuevo usuario
	public function crear_usuario()
	{

		$data=Request::all();

		$usuario= new User;
		$usuario->name=$data["name"];
		$usuario->email=$data["email"];
		$usuario->password=bcrypt($data["password"]);
		$usuario->codigo_usuario=$data["codigo_usuario"];
		$usuario->apellido_paterno=$data["apellido_paterno"];
		$usuario->apellido_materno=$data["apellido_materno"];
		$usuario->rut_usuario=$data["rut_usuario"];

		$resultado= $usuario->save();

		if($resultado){
            
            return view("mensajes.correcto")->with("mensaje","Usuario Registrado Exitósamente");
		}
		else
		{
             return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");
		}
	}

    public function editar_usuario($id)
    {
        //funcion para mostrar los datos de un usuario
        $usuario=User::find($id);
        $contador=count($usuario);
        if($contador>0){
            return view("formularios.editar_usuario")->with("usuario",$usuario);
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","El usuario no existe o fue borrado");
        }
    }

    public function actualizar_usuario()
    {

        $data=Request::all();
        $idUsuario=$data["id_usuario"];
        $usuario=User::find($idUsuario);
        $usuario->name=$data["name"];
        $usuario->email=$data["email"];
        $usuario->apellido_paterno=$data["apellido_paterno"];
        $usuario->apellido_materno=$data["apellido_materno"];

        $resultado= $usuario->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","Los datos del usuario fueron actualizados exitósamente");
        }
        else
        {

            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");

        }
    }

    public function mostrar_usuario($id)
    {
        //funcion para mostrar los datos de un usuario
        $usuario=User::find($id);
        $contador=count($usuario);
        if($contador>0){
            return view("formularios.mostrar_usuario")->with("usuario",$usuario);
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","El usuario no existe o fue borrado");
        }
    }
}