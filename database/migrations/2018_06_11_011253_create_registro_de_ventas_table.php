<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroDeVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_de_ventas', function (Blueprint $table) {
      $table->increments('id');
      
      $table->unsignedInteger('idProducts');
      $table->unsignedInteger('idVentas');
      
      $table->foreign('idProducts')->references('id')->on('products')->onDelete('cascade');
      $table->foreign('idVentas')->references('id')->on('ventas')->onDelete('cascade');      
      
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
        Schema::dropIfExists('registro_de_ventas');
    }
}
