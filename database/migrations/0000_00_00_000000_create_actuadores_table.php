<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActuadoresTable extends Migration
{
    public function up()
    {
        Schema::create('actuadores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->string('modelo', 255);
            $table->string('nombre', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('actuadores');
    }
}
