<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeingUsuariosEstadoCivil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios',function(Blueprint $table){
            $table->unsignedBigInteger('id_estado_civil')->default(1);
            $table->foreign('id_estado_civil')->references('id_estado_civil')->on('cat_estado_civil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropForeign('usuarios_id_estado_civil_foreign');
        });
    }
}
