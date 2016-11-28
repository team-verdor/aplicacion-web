<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelasTable extends Migration
{
    public function up()
    {
        Schema::create('parcelas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->decimal('superficie', 10, 2);
            $table->string('direccion', 255);
            $table->decimal('latitud', 10, 8)->default(0);
            $table->decimal('longitud', 11, 8)->default(0);
            $table->string('nombre', 255);
            $table->integer('figuras_geograficas_id')->unique()->unsigned()->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parcelas');
    }
}
