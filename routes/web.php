<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Route::get('/autodeploy', 'GitAutoDeploy@doPull');
Route::post('/autodeploy', 'GitAutoDeploy@doPull');

Route::get('/test', 'RaspberryTesting@printHello');

Route::any('/echo', function (Request $request) {
    dd($request->all());
});
