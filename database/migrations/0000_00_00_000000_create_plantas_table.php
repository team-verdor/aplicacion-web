<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantasTable extends Migration
{
    public function up()
    {
        Schema::create('plantas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->string('nombre_comun', 255);
            $table->string('nombre_cientifico', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('plantas');
    }
}
