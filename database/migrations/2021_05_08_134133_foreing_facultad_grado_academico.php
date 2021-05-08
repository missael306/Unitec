<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeingFacultadGradoAcademico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cat_facultad',function(Blueprint $table){
            $table->unsignedBigInteger('id_grado_academico')->default(1);
            $table->foreign('id_grado_academico')->references('id_grado_academico')->on('cat_grado_academico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cat_facultad', function (Blueprint $table) {
            $table->dropForeign('usuarios_id_grado_academico_foreign');
        });
    }
}
