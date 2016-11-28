<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControladoresTable extends Migration
{
    public function up()
    {
        Schema::create('controladores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();

            $table->increments('id');
            $table->string('serie', 255);
            $table->string('estado', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('controladores');
    }
}
