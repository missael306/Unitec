<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    use HasFactory;

    //-----Propiedades en base de datos
    protected $table = "cat_estado_civil";

    protected $primaryKey = "id_estado_civil";
 
    //----- Atributos visibles
    protected $fillable = [
         'estado_civil'
    ];
 
    //----- Atributos no visibles
    protected $hidden = [];
 
    //-----Metodos
    public function GetUsuarios()
    {
        return $this->hasMany('App\User','id_usuario');
    }
}
