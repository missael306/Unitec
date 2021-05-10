<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        //----- Generos     
        DB::table('cat_genero')->insert([
            'genero' => 'Masculino'
        ]);

        DB::table('cat_genero')->insert([
            'genero' => 'Femenino'
        ]);

        //----- Estado civil
        DB::table('cat_estado_civil')->insert([
            'estado_civil' => 'Soltero'
        ]);

        DB::table('cat_estado_civil')->insert([
            'estado_civil' => 'Casado'
        ]);

        DB::table('cat_estado_civil')->insert([
            'estado_civil' => 'Viudo'
        ]);

        //----- Grado academico
        DB::table('cat_grado_academico')->insert([
            'grado_academico' => 'Preparatoria'
        ]);

        DB::table('cat_grado_academico')->insert([
            'grado_academico' => 'Licenciatura'
        ]);
        
        DB::table('cat_grado_academico')->insert([
            'grado_academico' => 'Posgrado'
        ]);

        //----- Facultad
        DB::table('cat_facultad')->insert([
            'facultad' => 'Lic. En Derecho',
            'id_grado_academico' => 2
        ]);

        DB::table('cat_facultad')->insert([
            'facultad' => 'Lic. En Finanzas',
            'id_grado_academico' => 2
        ]);

        DB::table('cat_facultad')->insert([
            'facultad' => 'Mtria. Admon. De Negocios',
            'id_grado_academico' => 3
        ]);

        DB::table('cat_facultad')->insert([
            'facultad' => 'Mtria. Dirección de proyectos',
            'id_grado_academico' => 3
        ]);

        //----- Usuarios
        DB::table('usuarios')->insert([
            'nombres' => 'Missael',
            'primer_apellido' => 'Armenta',
            'segundo_apellido' => 'Peralta',
            'fecha_nacimimiento' => '1995-10-06',
            'email' => 'missael306@gmail.com',
            'password' => bcrypt('12345'),
            'id_genero' => 1,
            'id_estado_civil' => 1
        ]);
    }
}
