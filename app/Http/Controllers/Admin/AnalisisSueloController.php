<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\AnalisisSuelo;
use Illuminate\Http\Request;
use Session;

class AnalisisSueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $analisissuelo = AnalisisSuelo::paginate(25);

        return view('admin.analisis-suelo.index', compact('analisissuelo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.analisis-suelo.create');
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
        
        AnalisisSuelo::create($requestData);

        Session::flash('flash_message', 'AnalisisSuelo added!');

        return redirect('administrar/analisis-suelo');
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
        $analisissuelo = AnalisisSuelo::findOrFail($id);

        return view('admin.analisis-suelo.show', compact('analisissuelo'));
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
        $analisissuelo = AnalisisSuelo::findOrFail($id);

        return view('admin.analisis-suelo.edit', compact('analisissuelo'));
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
        
        $analisissuelo = AnalisisSuelo::findOrFail($id);
        $analisissuelo->update($requestData);

        Session::flash('flash_message', 'AnalisisSuelo updated!');

        return redirect('administrar/analisis-suelo');
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
        AnalisisSuelo::destroy($id);

        Session::flash('flash_message', 'AnalisisSuelo deleted!');

        return redirect('administrar/analisis-suelo');
    }
}
