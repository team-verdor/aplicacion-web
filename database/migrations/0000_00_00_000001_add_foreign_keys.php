<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    public function up()
    {
        Schema::table('actuadores_variables', function ($table) {
            $table->foreign('actuadores_id')
                ->references('id')->on('actuadores');
            $table->foreign('variables_id')
                ->references('id')->on('variables');
        });

        Schema::table('analisis_suelos', function ($table) {
            $table->foreign('muestras_suelo_id')
                ->references('id')->on('muestras_suelos');
        });

        Schema::table('categorias_taxonomicas', function ($table) {
            $table->foreign('categoria_padre_id')
                ->references('id')->on('categorias_taxonomicas');
        });

        Schema::table('controladores_actuadores', function ($table) {
            $table->foreign('controladores_id')
                ->references('id')->on('controladores');
            $table->foreign('actuadores_id')
                ->references('id')->on('actuadores');
        });

        Schema::table('controladores_sensores', function ($table) {
            $table->foreign('controladores_id')
                ->references('id')->on('controladores');
            $table->foreign('sensores_id')
                ->references('id')->on('sensores');
        });

        Schema::table('cultivos', function ($table) {
            $table->foreign('sectores_id')
                ->references('id')->on('sectores');
            $table->foreign('plantas_id')
                ->references('id')->on('plantas');
        });

        Schema::table('examenes_visuales', function ($table) {
            $table->foreign('ordenes_muestreos_id')
                ->references('id')->on('ordenes_muestreos');
        });

        Schema::table('muestras_aguas', function ($table) {
            $table->foreign('ordenes_muestreos_id')
                ->references('id')->on('ordenes_muestreos');
        });

        Schema::table('muestras_biologicas', function ($table) {
            $table->foreign('ordenes_muestreos_id')
                ->references('id')->on('ordenes_muestreos');
        });

        Schema::table('muestras_suelos', function ($table) {
            $table->foreign('ordenes_muestreos_id')
                ->references('id')->on('ordenes_muestreos');
        });

        Schema::table('ordenes_muestreos', function ($table) {
            $table->foreign('parcelas_id')
                ->references('id')->on('parcelas');
        });

        Schema::table('parcelas', function ($table) {
            $table->foreign('figuras_geograficas_id')
                ->references('id')->on('figuras_geograficas');
        });

        Schema::table('sectores', function ($table) {
            $table->foreign('parcelas_id')
                ->references('id')->on('parcelas');
            $table->foreign('figuras_geograficas_id')
                ->references('id')->on('figuras_geograficas');
        });

        Schema::table('sensores_variables', function ($table) {
            $table->foreign('sensores_id')
                ->references('id')->on('sensores');
            $table->foreign('variables_id')
                ->references('id')->on('variables');
        });

        Schema::table('taxonomias', function ($table) {
            $table->foreign('plantas_id')
                ->references('id')->on('plantas');
            $table->foreign('categorias_taxonomicas_id')
                ->references('id')->on('categorias_taxonomicas');
        });

        Schema::table('usuarios_parcelas', function ($table) {
            $table->foreign('usuarios_id')
                ->references('id')->on('usuarios');
            $table->foreign('parcelas_id')
                ->references('id')->on('parcelas');
            $table->foreign('roles_id')
                ->references('id')->on('roles');
        });

        Schema::table('usuarios', function ($table) {
            $table->foreign('personas_id')
                ->references('id')->on('personas');
        });

        Schema::table('valores_limites', function ($table) {
            $table->foreign('plantas_id')
                ->references('id')->on('plantas');
            $table->foreign('variables_id')
                ->references('id')->on('variables');
        });

        // todo agregar fk de sectores_contoladores
        // todo agregar fk de mediciones
        // todo agregar fk de instrucciones

        /*CONSTRAINT `fk_sectores_has_controladores_sectores1`
        FOREIGN KEY (`sectores_id` , `controladores_id`)
        REFERENCES `verdor_database`.`sectores` (`id` , `id`)
        ON UPDATE NO ACTION,
        ON DELETE NO ACTION*/

        /* CONSTRAINT `fk_mediciones_controladores_sensores1`
        FOREIGN KEY (`controladores_sensores_controladores_id` , `controladores_sensores_sensores_id`)
        REFERENCES `verdor_database`.`controladores_sensores` (`controladores_id` , `sensores_id`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION*/

        /*CONSTRAINT `fk_instrucciones_controladores_actuadores1`
    FOREIGN KEY (`controladores_actuadores_controladores_id` , `controladores_actuadores_actuadores_id`)
    REFERENCES `verdor_database`.`controladores_actuadores` (`controladores_id` , `actuadores_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION*/
    }

    public function down()
    {
        // todo deshacer fks
    }
}
