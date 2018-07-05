<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('idLibro');
            $table->unsignedInteger('idAlumno');
            $table->unsignedInteger('idUser');



            $table->dateTime('fechaPrestamo');
            $table->dateTime('fechaEntrega');

            $table->foreign('idLibro')->references('id')->on('libros') ->onDelete('cascade');
            $table->foreign('idAlumno')->references('id')->on('alumnos') ->onDelete('cascade');
            $table->foreign('idUser')->references('id')->on('users') ->onDelete('cascade');

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
        Schema::dropIfExists('prestamos');
    }
}
