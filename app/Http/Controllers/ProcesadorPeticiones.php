<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

/**
 * Description of ClientRequest
 *
 * @author Jaime Munizaga L. <jaime.munizaga.l@gmail.com>
 */
use App\Http\Controllers\Controller;
use App\Http\Controllers\ClientRequest;
use App\Http\Controllers\ClientRequestManager;
use Illuminate\Http\Request;

class ProcesadorPeticiones extends Controller
{
    public function procesar(Request $pageRequest)
    {
        $parameters = $pageRequest->all();
        
        if($parameters["type"]=="cliente"){
            $request = new ClientRequest();
            $request->store($parameters["data"]);
            $response = array(
                "status"=>true,
                "data"=>$parameters["data"]);
            return response()->json($response);
        }
        if($parameters["type"]=="controlador"){
            $cliReqMan = new ClientRequestManager();
            $data = $cliReqMan->getNoEjecutadas();
            foreach ($data as $request) {
                $requestObj[] = $request;                
            }
            $response = array($requestObj,true);
            return response()->json($response);
            
        }    
    }
}

