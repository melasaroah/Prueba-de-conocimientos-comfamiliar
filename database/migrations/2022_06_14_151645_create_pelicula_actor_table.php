<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculaActorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelicula_actor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_pelicula');
            $table->unsignedBigInteger('id_actor');
            $table->smallInteger('estado')->default(1)->coment('0:Inactivo; 1:Activo');
            $table->timestamps();

            $table->foreign('id_pelicula')->references('id')->on('peliculas');
            $table->foreign('id_actor')->references('id')->on('actores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelicula_actor');
    }
}
