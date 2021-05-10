<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models;


class LoginController extends Controller
{   
    //-----Constructor
    public function __construct(){
        $this->middleware('guest',['only' => 'Index']);
    }

    //-----Metodos
    public function Index()
    {
        //catalogos
        $generos = Models\Genero::all();
        $estado_civil = Models\EstadoCivil::all();
        $grado_academico = Models\GradoAcademico::all();

        //parametros a la vista
        $parametros = [
            'generos' => $generos,
            'estado_civil' => $estado_civil,
            'grado_academico' => $grado_academico
        ];

        return view('login/login',$parametros);
    }

    public function ObtenerFacultades(Request $request)
    {
        if($request->ajax()){
            
            $idGradoAcademico = $request->idGradoAcademico;
            $facultades = Models\Facultad::where("id_grado_academico","=",$idGradoAcademico)->get();

            return response()->json(['facultades' => $facultades]);
        }
    }

    public function Autenticar(Request $request)
    {
        $credenciales = $this->validate(request(),[
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);        
        
        if(Auth::attempt($credenciales)){
            return redirect()->route('home');
        }else{
            return back()->withErrors(['login' => trans('auth.failed')])->withInput(request(['email']));
        }
    }

    public function CerrarSesion(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function RegistrarUsuario(Request $request)
    {
        $message = "";
        $inserto = false;
        try{
            $user = new Models\User($request->all());
            $user->password = bcrypt($request->password);
            $inserto = $user->save();
        }catch(Exception $exception){
            $message = $exception->getMessage();
        }        
        return response()->json(['response' => $inserto, 'mensaje' => $message ]);
    }
}
