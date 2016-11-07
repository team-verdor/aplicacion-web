<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensoresTable extends Migration
{
    public function up()
    {
        Schema::create('sensores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->string('rango_minimo', 255);
            $table->string('rango_maximo', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('sensores');
    }
}
