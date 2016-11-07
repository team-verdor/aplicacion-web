<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->string('email', 255);
            $table->string('nombreusuario', 255);
            $table->string('contrasena', 255);
            $table->integer('personas_id')->unique()->unsigned()->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
