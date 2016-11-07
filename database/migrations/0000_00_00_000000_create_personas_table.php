<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->string('dni', 255)->unique();
            $table->string('nombres', 255);
            $table->string('apellido_pat', 255)->nullable()->default(null);
            $table->string('apelllido_mat', 255)->nullable()->default(null);
            $table->date('fecha_nac')->nullable();
            $table->string('direccion', 255)->nullable()->default(null);
            $table->string('telefono', 255)->nullable()->default(null);
            $table->increments('id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
