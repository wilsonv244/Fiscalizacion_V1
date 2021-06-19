<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfraccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infraccion', function (Blueprint $table) {
            $table->id();
            $table->string('estado', 500);
            $table->date('fecha');
            $table->string('nombreEstablecimiento',80);
            $table->string('direccion', 75);
            $table->string('actaComiso', 12);
            $table->string('informeF',60);
            $table->date('fechaFisc');
            $table->string('observacion', 500);
            
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
        Schema::dropIfExists('infraccion');
    }
}
