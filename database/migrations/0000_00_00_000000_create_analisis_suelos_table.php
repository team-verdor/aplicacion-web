<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalisisSuelosTable extends Migration
{
    public function up()
    {
        Schema::create('analisis_suelos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->integer('muestras_suelo_id')->unsigned()->unique();
        });
    }

    public function down()
    {
        Schema::dropIfExists('analisis_suelos');
    }
}
