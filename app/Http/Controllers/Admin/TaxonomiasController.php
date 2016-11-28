<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Taxonomias;
use Illuminate\Http\Request;
use Session;

class TaxonomiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $taxonomias = Taxonomias::paginate(25);

        return view('admin.taxonomias.index', compact('taxonomias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.taxonomias.create');
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
        
        Taxonomias::create($requestData);

        Session::flash('flash_message', 'Taxonomias added!');

        return redirect('administrar/taxonomias');
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
        $taxonomia = Taxonomias::findOrFail($id);

        return view('admin.taxonomias.show', compact('taxonomia'));
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
        $taxonomia = Taxonomias::findOrFail($id);

        return view('admin.taxonomias.edit', compact('taxonomia'));
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
        
        $taxonomia = Taxonomias::findOrFail($id);
        $taxonomia->update($requestData);

        Session::flash('flash_message', 'Taxonomias updated!');

        return redirect('administrar/taxonomias');
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
        Taxonomias::destroy($id);

        Session::flash('flash_message', 'Taxonomias deleted!');

        return redirect('administrar/taxonomias');
    }
}
