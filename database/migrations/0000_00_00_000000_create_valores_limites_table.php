<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValoresLimitesTable extends Migration
{
    public function up()
    {
        Schema::create('valores_limites', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->integer('plantas_id')->unique()->unsigned();
            $table->integer('variables_id')->unique()->unsigned();
            $table->string('minimo', 255);
            $table->string('maximo', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('valores_limites');
    }
}
