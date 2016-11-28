<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControladoresActuadoresTable extends Migration
{
    public function up()
    {
        Schema::create('controladores_actuadores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->integer('controladores_id')->unique()->unsigned();
            $table->integer('actuadores_id')->unique()->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('controladores_actuadores');
    }
}
