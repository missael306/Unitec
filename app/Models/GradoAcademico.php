<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradoAcademico extends Model
{
    use HasFactory;

    //-----Propiedades en base de datos
    protected $table = "cat_grado_academico";

    protected $primaryKey = "id_grado_academico";

    //----- Atributos visibles
    protected $fillable = [
        'grado_academico'
    ];

    //----- Atributos no visibles
    protected $hidden = [];

    //-----Metodos
    public function GetUsuarios()
    {
        return $this->hasMany('App\User','id_usuario');
    }
}
