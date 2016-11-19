<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValoresLimites extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'valores_limites';

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
    protected $fillable = ['plantas_id', 'variables_id', 'minimo', 'maximo', 'optimo'];

    
}
