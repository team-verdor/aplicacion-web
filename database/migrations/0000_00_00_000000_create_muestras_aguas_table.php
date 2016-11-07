<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuestrasAguasTable extends Migration
{
    public function up()
    {
        Schema::create('muestras_aguas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->integer('ordenes_muestreos_id')->unique()->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('muestras_aguas');
    }
}
