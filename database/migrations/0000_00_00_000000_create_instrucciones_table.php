<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstruccionesTable extends Migration
{
    public function up()
    {
        Schema::create('instrucciones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->integer('ca_controladores_id')->unsigned();
            $table->integer('ca_actuadores_id')->unsigned();
            $table->index(['ca_controladores_id', 'ca_actuadores_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('instrucciones');
    }
}
