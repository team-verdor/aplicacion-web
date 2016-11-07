<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenesVisualesTable extends Migration
{
    public function up()
    {
        Schema::create('examenes_visuales', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->integer('ordenes_muestreos_id')->unique()->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('examenes_visuales');
    }
}
