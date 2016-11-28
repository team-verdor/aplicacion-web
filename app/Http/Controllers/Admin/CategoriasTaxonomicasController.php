<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\CategoriasTaxonomicas;
use Illuminate\Http\Request;
use Session;

class CategoriasTaxonomicasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categoriastaxonomicas = CategoriasTaxonomicas::paginate(25);

        return view('admin.categorias-taxonomicas.index', compact('categoriastaxonomicas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.categorias-taxonomicas.create');
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
        
        CategoriasTaxonomicas::create($requestData);

        Session::flash('flash_message', 'CategoriasTaxonomicas added!');

        return redirect('administrar/categorias-taxonomicas');
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
        $categoriastaxonomica = CategoriasTaxonomicas::findOrFail($id);

        return view('admin.categorias-taxonomicas.show', compact('categoriastaxonomica'));
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
        $categoriastaxonomica = CategoriasTaxonomicas::findOrFail($id);

        return view('admin.categorias-taxonomicas.edit', compact('categoriastaxonomica'));
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
        
        $categoriastaxonomica = CategoriasTaxonomicas::findOrFail($id);
        $categoriastaxonomica->update($requestData);

        Session::flash('flash_message', 'CategoriasTaxonomicas updated!');

        return redirect('administrar/categorias-taxonomicas');
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
        CategoriasTaxonomicas::destroy($id);

        Session::flash('flash_message', 'CategoriasTaxonomicas deleted!');

        return redirect('administrar/categorias-taxonomicas');
    }
}
