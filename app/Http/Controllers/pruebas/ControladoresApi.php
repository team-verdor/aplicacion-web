<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladoresApi extends Controller
{
    public function procesar(Request $request)
    {
        $parameters = $request->all();
        
        return response()->json($parameters);
    }
}
