<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    use HasFactory;

    //-----Propiedades en base de datos
    protected $table = "cat_facultad";

    protected $primaryKey = "id_facultad";

    //----- Atributos visibles
    protected $fillable = [
        'facultad',
        'id_grado_academico'
    ];

    //----- Atributos no visibles
    protected $hidden = [];

    //-----Metodos
    public function GetGradoAcademico()
    {
        return $this->belongsTo('App\GradoAcademico','id_grado_academico');
    }
}
