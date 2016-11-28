<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTaxonomicasTable extends Migration
{
    public function up()
    {
        Schema::create('categorias_taxonomicas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->string('nombre', 255);
            $table->integer('categoria_padre_id')->unique()->unsigned()->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorias_taxonomicas');
    }
}
