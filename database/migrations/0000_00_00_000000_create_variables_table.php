<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariablesTable extends Migration
{
    public function up()
    {
        Schema::create('variables', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->string('nombre', 255);
            $table->string('descripcion', 255)->nullable()->default(null);
            $table->string('sigla', 255);
            $table->string('tipo', 255);
            $table->string('unidad_medida', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('variables');
    }
}
