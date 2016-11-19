<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\TiposPlantas;
use Illuminate\Http\Request;
use Session;

class TiposPlantasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $tiposplantas = TiposPlantas::paginate(25);

        return view('admin.tipos-plantas.index', compact('tiposplantas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tipos-plantas.create');
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
        
        TiposPlantas::create($requestData);

        Session::flash('flash_message', 'TiposPlantas added!');

        return redirect('administrar/tipos-plantas');
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
        $tiposplanta = TiposPlantas::findOrFail($id);

        return view('admin.tipos-plantas.show', compact('tiposplanta'));
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
        $tiposplanta = TiposPlantas::findOrFail($id);

        return view('admin.tipos-plantas.edit', compact('tiposplanta'));
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
        
        $tiposplanta = TiposPlantas::findOrFail($id);
        $tiposplanta->update($requestData);

        Session::flash('flash_message', 'TiposPlantas updated!');

        return redirect('administrar/tipos-plantas');
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
        TiposPlantas::destroy($id);

        Session::flash('flash_message', 'TiposPlantas deleted!');

        return redirect('administrar/tipos-plantas');
    }
}
