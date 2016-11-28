<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuestrasSuelosTable extends Migration
{
    public function up()
    {
        Schema::create('muestras_suelos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->string('metodo_muestreo', 255);
            $table->string('color', 255);
            $table->string('textura', 255);
            $table->string('estructura', 255);
            $table->string('fecha_muestra', 255);
            $table->string('latitud', 255);
            $table->string('longitud', 255);
            $table->string('instrumento', 255);
            $table->string('profundidad', 255);
            $table->string('submuestras', 255);
            $table->string('hectareas_representa', 255);

            $table->integer('ordenes_muestreos_id')->unique()->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('muestras_suelos');
    }
}
