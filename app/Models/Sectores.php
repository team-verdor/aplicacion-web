<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sectores extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sectores';

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
    protected $fillable = ['parcelas_id', 'tipos_sectores_id', 'figuras_geograficas_id'];

    
}
