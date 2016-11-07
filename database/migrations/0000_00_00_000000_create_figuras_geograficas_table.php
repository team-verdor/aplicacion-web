<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFigurasGeograficasTable extends Migration
{
    public function up()
    {
        Schema::create('figuras_geograficas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            //`figura` TEXT NOT NULL,
        });
    }

    public function down()
    {
        Schema::dropIfExists('figuras_geograficas');
    }
}
