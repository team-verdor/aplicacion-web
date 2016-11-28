<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectoresTable extends Migration
{
    public function up()
    {
        Schema::create('sectores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->integer('parcelas_id')->unique()->unsigned();
            $table->integer('tipos_sectores_id')->unsigned();
            $table->integer('figuras_geograficas_id')->unique()->unsigned()->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sectores');
    }
}
