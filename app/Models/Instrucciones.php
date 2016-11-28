<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instrucciones extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'instrucciones';

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
    protected $fillable = ['controladores_id', 'actuadores_id', 'emision'];

    
}
