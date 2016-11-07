<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControladoresSensoresTable extends Migration
{
    public function up()
    {
        Schema::create('controladores_sensores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->integer('controladores_id')->unique()->unsigned();
            $table->integer('sensores_id')->unique()->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('controladores_sensores');
    }
}
