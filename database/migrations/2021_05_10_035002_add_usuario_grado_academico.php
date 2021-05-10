<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsuarioGradoAcademico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_grado_academico', function (Blueprint $table) {
            $table->bigIncrements('id_usuario_grado_academico');
            $table->bigInteger("id_usuario");
            $table->bigInteger("id_grado_academico");
            $table->bigInteger("id_facultad")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_grado_academico');
    }
}
