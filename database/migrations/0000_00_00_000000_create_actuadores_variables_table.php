<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActuadoresVariablesTable extends Migration
{
    public function up()
    {
        Schema::create('actuadores_variables', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->integer('actuadores_id')->unique()->unsigned();
            $table->integer('variables_id')->unique()->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('actuadores_variables');
    }
}
