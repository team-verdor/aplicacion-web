<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosParcelasTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios_parcelas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->integer('usuarios_id')->unique()->unsigned();
            $table->integer('parcelas_id')->unique()->unsigned();
            $table->integer('roles_id')->unique()->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios_parcelas');
    }
}
