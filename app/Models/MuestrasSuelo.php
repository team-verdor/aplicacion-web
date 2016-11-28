<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MuestrasSuelo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'muestras_suelo';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['metodo_muestreo', 'color', 'textura', 'estructura', 'fecha_muestra', 'latitud', 'longitud', 'instrumento', 'profundidad', 'submuestras', 'hectareas_representa', 'ordenes_muestreos_id'];

    
}
