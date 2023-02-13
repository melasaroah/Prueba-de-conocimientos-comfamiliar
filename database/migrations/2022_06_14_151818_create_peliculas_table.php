<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_director');
            $table->string('nombre_pelicula', 30);
            $table->string('tipo_pelicula', 30);
            $table->dateTime('fecha_realizacion');
            $table->smallInteger('estado')->default(1)->coment('0:Inactivo; 1:Activo');
            $table->timestamps();

            $table->foreign('id_director')->references('id')->on('directores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
