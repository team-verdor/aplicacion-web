<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdenesMuestreos extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ordenes_muestreos';

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
    protected $fillable = ['fecha_orden', 'motivo', 'comentarios', 'parcelas_id'];

    
}
