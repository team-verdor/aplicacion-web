<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectoresControladoresTable extends Migration
{
    public function up()
    {
        Schema::create('sectores_controladores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->integer('sectores_id')->unsigned();
            $table->integer('controladores_id')->unique()->unsigned();
            $table->date('fecha_instalacion')->nullable()->default(null);
            $table->date('fecha_baja')->nullable()->default(null); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('sectores_controladores');
    }
}
