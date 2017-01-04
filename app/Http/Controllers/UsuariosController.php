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

}