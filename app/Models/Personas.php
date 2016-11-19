<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'personas';

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
    protected $fillable = ['dni', 'nombres', 'apellido_pat', 'apelllido_mat', 'fecha_nac', 'direccion', 'telefono'];

    
}
