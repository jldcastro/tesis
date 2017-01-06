<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Equipo;

class ListasController extends Controller
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


    //presenta la lista y paginación de usuarios
    public function lista_usuarios()
    {
        $usuarios= User::paginate(10);
        return view('listas.lista_usuarios')->with("usuarios", $usuarios );
    }

    //presenta la lista y paginación de equipos
    public function lista_equipos()
    {
        $equipos= Equipo::paginate(10);
        return view('listas.lista_equipos')->with("equipos", $equipos );
    }

}
