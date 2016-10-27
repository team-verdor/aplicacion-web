<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControladoresActuadoresTable extends Migration
{
    public function up()
    {
        Schema::create('controladores_actuadores', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('controladores_actuadores');
    }
}
