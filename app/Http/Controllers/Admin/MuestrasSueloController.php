<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\MuestrasSuelo;
use Illuminate\Http\Request;
use Session;

class MuestrasSueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $muestrassuelo = MuestrasSuelo::paginate(25);

        return view('admin.muestras-suelo.index', compact('muestrassuelo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.muestras-suelo.create');
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
        
        MuestrasSuelo::create($requestData);

        Session::flash('flash_message', 'MuestrasSuelo added!');

        return redirect('administrar/muestras-suelo');
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
        $muestrassuelo = MuestrasSuelo::findOrFail($id);

        return view('admin.muestras-suelo.show', compact('muestrassuelo'));
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
        $muestrassuelo = MuestrasSuelo::findOrFail($id);

        return view('admin.muestras-suelo.edit', compact('muestrassuelo'));
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
        
        $muestrassuelo = MuestrasSuelo::findOrFail($id);
        $muestrassuelo->update($requestData);

        Session::flash('flash_message', 'MuestrasSuelo updated!');

        return redirect('administrar/muestras-suelo');
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
        MuestrasSuelo::destroy($id);

        Session::flash('flash_message', 'MuestrasSuelo deleted!');

        return redirect('administrar/muestras-suelo');
    }
}
