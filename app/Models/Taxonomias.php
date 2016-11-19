<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taxonomias extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'taxonomias';

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
    protected $fillable = ['plantas_id', 'categorias_taxonomicas_id'];

    
}
