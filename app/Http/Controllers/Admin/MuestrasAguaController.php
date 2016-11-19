<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\MuestrasAgua;
use Illuminate\Http\Request;
use Session;

class MuestrasAguaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $muestrasagua = MuestrasAgua::paginate(25);

        return view('admin.muestras-agua.index', compact('muestrasagua'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.muestras-agua.create');
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
        
        MuestrasAgua::create($requestData);

        Session::flash('flash_message', 'MuestrasAgua added!');

        return redirect('administrar/muestras-agua');
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
        $muestrasagua = MuestrasAgua::findOrFail($id);

        return view('admin.muestras-agua.show', compact('muestrasagua'));
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
        $muestrasagua = MuestrasAgua::findOrFail($id);

        return view('admin.muestras-agua.edit', compact('muestrasagua'));
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
        
        $muestrasagua = MuestrasAgua::findOrFail($id);
        $muestrasagua->update($requestData);

        Session::flash('flash_message', 'MuestrasAgua updated!');

        return redirect('administrar/muestras-agua');
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
        MuestrasAgua::destroy($id);

        Session::flash('flash_message', 'MuestrasAgua deleted!');

        return redirect('administrar/muestras-agua');
    }
}
