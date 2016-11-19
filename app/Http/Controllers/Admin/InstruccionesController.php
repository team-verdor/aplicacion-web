<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Instrucciones;
use Illuminate\Http\Request;
use Session;

class InstruccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $instrucciones = Instrucciones::paginate(25);

        return view('admin.instrucciones.index', compact('instrucciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.instrucciones.create');
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
        
        Instrucciones::create($requestData);

        Session::flash('flash_message', 'Instrucciones added!');

        return redirect('administrar/instrucciones');
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
        $instruccione = Instrucciones::findOrFail($id);

        return view('admin.instrucciones.show', compact('instruccione'));
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
        $instruccione = Instrucciones::findOrFail($id);

        return view('admin.instrucciones.edit', compact('instruccione'));
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
        
        $instruccione = Instrucciones::findOrFail($id);
        $instruccione->update($requestData);

        Session::flash('flash_message', 'Instrucciones updated!');

        return redirect('administrar/instrucciones');
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
        Instrucciones::destroy($id);

        Session::flash('flash_message', 'Instrucciones deleted!');

        return redirect('administrar/instrucciones');
    }
}
