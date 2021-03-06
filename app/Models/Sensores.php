<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sensores extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sensores';

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
    protected $fillable = ['nombre', 'modelo', 'fabricantes_id'];

    
}
