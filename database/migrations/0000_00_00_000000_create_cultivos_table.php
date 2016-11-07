<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCultivosTable extends Migration
{
    public function up()
    {
        Schema::create('cultivos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->date('fecha_siembra')->nullable();
            $table->date('fecha_cosecha')->nullable();
            $table->integer('sectores_id')->unique()->unsigned();
            $table->integer('plantas_id')->unique()->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cultivos');
    }
}
