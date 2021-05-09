<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;


class LoginController extends Controller
{   
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
}
