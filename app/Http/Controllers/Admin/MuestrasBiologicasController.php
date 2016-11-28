<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\MuestrasBiologicas;
use Illuminate\Http\Request;
use Session;

class MuestrasBiologicasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $muestrasbiologicas = MuestrasBiologicas::paginate(25);

        return view('admin.muestras-biologicas.index', compact('muestrasbiologicas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.muestras-biologicas.create');
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
        
        MuestrasBiologicas::create($requestData);

        Session::flash('flash_message', 'MuestrasBiologicas added!');

        return redirect('administrar/muestras-biologicas');
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
        $muestrasbiologica = MuestrasBiologicas::findOrFail($id);

        return view('admin.muestras-biologicas.show', compact('muestrasbiologica'));
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
        $muestrasbiologica = MuestrasBiologicas::findOrFail($id);

        return view('admin.muestras-biologicas.edit', compact('muestrasbiologica'));
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
        
        $muestrasbiologica = MuestrasBiologicas::findOrFail($id);
        $muestrasbiologica->update($requestData);

        Session::flash('flash_message', 'MuestrasBiologicas updated!');

        return redirect('administrar/muestras-biologicas');
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
        MuestrasBiologicas::destroy($id);

        Session::flash('flash_message', 'MuestrasBiologicas deleted!');

        return redirect('administrar/muestras-biologicas');
    }
}
