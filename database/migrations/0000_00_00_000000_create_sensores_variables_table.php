<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensoresVariablesTable extends Migration
{
    public function up()
    {
        Schema::create('sensores_variables', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->integer('sensores_id')->unique()->unsigned();
            $table->integer('variables_id')->unique()->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sensores_variables');
    }
}
