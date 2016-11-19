<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Fabricantes;
use Illuminate\Http\Request;
use Session;

class FabricantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $fabricantes = Fabricantes::paginate(25);

        return view('admin.fabricantes.index', compact('fabricantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.fabricantes.create');
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
        
        Fabricantes::create($requestData);

        Session::flash('flash_message', 'Fabricantes added!');

        return redirect('administrar/fabricantes');
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
        $fabricante = Fabricantes::findOrFail($id);

        return view('admin.fabricantes.show', compact('fabricante'));
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
        $fabricante = Fabricantes::findOrFail($id);

        return view('admin.fabricantes.edit', compact('fabricante'));
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
        
        $fabricante = Fabricantes::findOrFail($id);
        $fabricante->update($requestData);

        Session::flash('flash_message', 'Fabricantes updated!');

        return redirect('administrar/fabricantes');
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
        Fabricantes::destroy($id);

        Session::flash('flash_message', 'Fabricantes deleted!');

        return redirect('administrar/fabricantes');
    }
}
