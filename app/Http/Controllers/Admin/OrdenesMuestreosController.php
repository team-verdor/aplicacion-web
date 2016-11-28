<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\OrdenesMuestreos;
use Illuminate\Http\Request;
use Session;

class OrdenesMuestreosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $ordenesmuestreos = OrdenesMuestreos::paginate(25);

        return view('admin.ordenes-muestreos.index', compact('ordenesmuestreos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.ordenes-muestreos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        OrdenesMuestreos::create($requestData);

        Session::flash('flash_message', 'OrdenesMuestreos added!');

        return redirect('administrar/ordenes-muestreos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $ordenesmuestreo = OrdenesMuestreos::findOrFail($id);

        return view('admin.ordenes-muestreos.show', compact('ordenesmuestreo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $ordenesmuestreo = OrdenesMuestreos::findOrFail($id);

        return view('admin.ordenes-muestreos.edit', compact('ordenesmuestreo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $ordenesmuestreo = OrdenesMuestreos::findOrFail($id);
        $ordenesmuestreo->update($requestData);

        Session::flash('flash_message', 'OrdenesMuestreos updated!');

        return redirect('administrar/ordenes-muestreos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        OrdenesMuestreos::destroy($id);

        Session::flash('flash_message', 'OrdenesMuestreos deleted!');

        return redirect('administrar/ordenes-muestreos');
    }
}
