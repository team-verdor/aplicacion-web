<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ClientRequest;

/**
 * Description of RequestManager
 *
 * @author Jaime Munizaga L. <jaime.munizaga.l@gmail.com>
 */
class ClientRequestManager {
    
    public function getNoEjecutadas(){
        return $this->selectPeticion('estado',ClientRequest::$NO_EJECUTADO);
    }
    
    private function selectPeticion($campo,$estado){
        $results = DB::select('select * from request_cliente where :campo = :estado', ['campo' => $campo,'estado' => $estado]);
        return $results;
    }

}
