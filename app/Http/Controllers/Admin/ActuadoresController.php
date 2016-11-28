<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Actuadores;
use Illuminate\Http\Request;
use Session;

class ActuadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $actuadores = Actuadores::paginate(25);

        return view('admin.actuadores.index', compact('actuadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.actuadores.create');
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
        
        Actuadores::create($requestData);

        Session::flash('flash_message', 'Actuadores added!');

        return redirect('administrar/actuadores');
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
        $actuadore = Actuadores::findOrFail($id);

        return view('admin.actuadores.show', compact('actuadore'));
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
        $actuadore = Actuadores::findOrFail($id);

        return view('admin.actuadores.edit', compact('actuadore'));
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
        
        $actuadore = Actuadores::findOrFail($id);
        $actuadore->update($requestData);

        Session::flash('flash_message', 'Actuadores updated!');

        return redirect('administrar/actuadores');
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
        Actuadores::destroy($id);

        Session::flash('flash_message', 'Actuadores deleted!');

        return redirect('administrar/actuadores');
    }
}
