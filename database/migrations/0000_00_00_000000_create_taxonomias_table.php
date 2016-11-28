<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxonomiasTable extends Migration
{
    public function up()
    {
        Schema::create('taxonomias', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->integer('plantas_id')->unique()->unsigned();
            $table->integer('categorias_taxonomicas_id')->unique()->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('taxonomias');
    }
}
