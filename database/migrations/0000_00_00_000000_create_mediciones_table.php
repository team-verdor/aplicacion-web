<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicionesTable extends Migration
{
    public function up()
    {
        Schema::create('mediciones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->decimal('valor', 10, 4);
            $table->integer('cs_controladores_id')->unsigned();
            $table->integer('cs_sensores_id')->unsigned();
            $table->index(['cs_controladores_id', 'cs_sensores_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('mediciones');
    }
}
