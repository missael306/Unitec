<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    //-----Propiedades en base de datos
    protected $table = "cat_genero";

    protected $primaryKey = "id_genero";

    //----- Atributos visibles
    protected $fillable = [
        'genero'
    ];

    //----- Atributos no visibles
    protected $hidden = [];

    //-----Metodos
    public function GetUsuarios()
    {
        return $this->hasMany('App\User','id_usuario');
    }
}
