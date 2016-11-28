<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenesMuestreosTable extends Migration
{
    public function up()
    {
        Schema::create('ordenes_muestreos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->string('fecha_orden', 255);
            $table->string('motivo', 255);
            $table->string('comentarios', 255);
            $table->integer('parcelas_id')->unique()->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ordenes_muestreos');
    }
}
