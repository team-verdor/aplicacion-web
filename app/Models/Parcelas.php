<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parcelas extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'parcelas';

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
    protected $fillable = ['superficie', 'direccion', 'latitud', 'longitud', 'nombre', 'figuras_geograficas_id'];

    
}
