<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('isbn');
            $table->string('titulo');
            $table->unsignedInteger('idAutorPrimario');
            $table->unsignedInteger('idAutorSecundario');
            $table->unsignedInteger('idEditorial');

            $table->foreign('idAutorPrimario')->references('id')->on('autores') ->onDelete('cascade');
            $table->foreign('idAutorSecundario')->references('id')->on('autores') ->onDelete('cascade');
            $table->foreign('idEditorial')->references('id')->on('editoriales') ->onDelete('cascade');



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
        Schema::dropIfExists('libros');
    }
}
