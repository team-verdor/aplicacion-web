<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RaspberryTesting extends Controller
{
    public function printHello(Request $request)
    {
        $parameters = $request->all();
        dd($parameters);
        //$request->json($parameters);
    }
}
