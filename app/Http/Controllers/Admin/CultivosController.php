<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Cultivos;
use Illuminate\Http\Request;
use Session;

class CultivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $cultivos = Cultivos::paginate(25);

        return view('admin.cultivos.index', compact('cultivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.cultivos.create');
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
        
        Cultivos::create($requestData);

        Session::flash('flash_message', 'Cultivos added!');

        return redirect('administrar/cultivos');
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
        $cultivo = Cultivos::findOrFail($id);

        return view('admin.cultivos.show', compact('cultivo'));
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
        $cultivo = Cultivos::findOrFail($id);

        return view('admin.cultivos.edit', compact('cultivo'));
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
        
        $cultivo = Cultivos::findOrFail($id);
        $cultivo->update($requestData);

        Session::flash('flash_message', 'Cultivos updated!');

        return redirect('administrar/cultivos');
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
        Cultivos::destroy($id);

        Session::flash('flash_message', 'Cultivos deleted!');

        return redirect('administrar/cultivos');
    }
}
