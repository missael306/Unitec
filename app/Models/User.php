<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    //-----Propiedades en base de datos
    protected $table = "usuarios";

    protected $primaryKey = "id_usuario";

    //----- Atributos visibles
    protected $fillable = [
        'nombres',
        'primer_apellido',
        'segundo_apellido',
        'fecha_nacimimiento',
        'correo_electronico',
        'contrasena',
        'id_genero',
        'id_estado_civil',
        'id_grado_academico'
    ];

    //----- Atributos no visibles
    protected $hidden = [
        'contrasena',
        'remember_token'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //-----Metodos
    public function GetGenero()
    {
        return $this->belongsTo('App\Genero','id_genero');
    }

    public function GetEstadoCivil()
    {
        return $this->belongsTo('App\EstadoCivil','id_estado_civil');
    }

    public function GetGradoAcademico()
    {
        return $this->belongsTo('App\GradoAcademico','id_grado_academico');
    }
}
