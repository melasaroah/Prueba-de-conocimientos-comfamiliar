<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres', 30);
            $table->string('apellidos', 30);
            $table->bigInteger('cedula');
            $table->bigInteger('telefono');
            $table->smallInteger('estado')->default(1)->coment('0:Inactivo; 1:Activo');
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
        Schema::dropIfExists('directores');
    }
}
