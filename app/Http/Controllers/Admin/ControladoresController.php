<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Controladores;
use Illuminate\Http\Request;
use Session;

class ControladoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $controladores = Controladores::paginate(25);

        return view('admin.controladores.index', compact('controladores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.controladores.create');
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
        
        Controladores::create($requestData);

        Session::flash('flash_message', 'Controladores added!');

        return redirect('administrar/controladores');
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
        $controladore = Controladores::findOrFail($id);

        return view('admin.controladores.show', compact('controladore'));
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
        $controladore = Controladores::findOrFail($id);

        return view('admin.controladores.edit', compact('controladore'));
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
        
        $controladore = Controladores::findOrFail($id);
        $controladore->update($requestData);

        Session::flash('flash_message', 'Controladores updated!');

        return redirect('administrar/controladores');
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
        Controladores::destroy($id);

        Session::flash('flash_message', 'Controladores deleted!');

        return redirect('administrar/controladores');
    }
}
