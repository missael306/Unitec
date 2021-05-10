<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioGradoAcademico extends Model
{
    use HasFactory;

    //-----Propiedades en base de datos
    protected $table = "usuario_grado_academico";

    protected $primaryKey = "id_usuario_grado_academico";

    //----- Atributos visibles
    protected $fillable = [
        'id_usuario',
        'id_grado_academico',
        'id_facultad'
    ];

    //----- Atributos no visibles
    protected $hidden = [];

    //-----Metodos
    public function GetUsuario()
    {
        return $this->belongsTo('App\Usuario','id_usuario');
    }

    public function GetGradoAcademico()
    {
        return $this->belongsTo('App\GradoAcademico','id_grado_academico');
    }
}
