<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mediciones extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mediciones';

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
    protected $fillable = ['emision', 'valor', 'valor_numero', 'exponente', 'sensores_id', 'controladores_id'];

    
}
