<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamoLibroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo_libro', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idlibro');
            $table->foreign('idlibro','fk_libro_prestamo_libro')->references('id')->on('libro')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('idusario');
            $table->string('prestado_a',100);
            $table->date('fecha_prestamo');
            $table->date('fecha_devolucion')->nullable();
            $table->boolean('estado');
            $table->timestamps();
            $table->foreign('idusario','fk_libro_prestamo_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamo_libro');
    }
}
