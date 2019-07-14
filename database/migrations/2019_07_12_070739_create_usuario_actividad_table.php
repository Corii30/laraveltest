<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioActividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_actividad', function (Blueprint $table) {
            $table->unsignedInteger('idactividad');
            $table->unsignedInteger('idusario');
            $table->foreign('idactividad','fk_actividad_usuario_actividad')->references('id')->on('actividad')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('idusario','fk_actividad_usuario_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_actividad');
    }
}
