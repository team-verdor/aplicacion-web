<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnalisisSuelo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'analisis_suelo';

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
    protected $fillable = ['muestras_suelo_id'];

    
}
