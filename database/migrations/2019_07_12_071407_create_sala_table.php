<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sala', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idactividad');
            $table->unsignedInteger('idbibliotecario');
            $table->foreign('idactividad','fk_sala_actividad')->references('id')->on('actividad')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idbibliotecario','fk_sala_bibliotecario')->references('id')->on('bibliotecario')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('sala');
    }
}
