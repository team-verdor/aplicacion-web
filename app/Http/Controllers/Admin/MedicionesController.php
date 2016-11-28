<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Mediciones;
use Illuminate\Http\Request;
use Session;

class MedicionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $mediciones = Mediciones::paginate(25);

        return view('admin.mediciones.index', compact('mediciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.mediciones.create');
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
        
        Mediciones::create($requestData);

        Session::flash('flash_message', 'Mediciones added!');

        return redirect('administrar/mediciones');
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
        $medicione = Mediciones::findOrFail($id);

        return view('admin.mediciones.show', compact('medicione'));
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
        $medicione = Mediciones::findOrFail($id);

        return view('admin.mediciones.edit', compact('medicione'));
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
        
        $medicione = Mediciones::findOrFail($id);
        $medicione->update($requestData);

        Session::flash('flash_message', 'Mediciones updated!');

        return redirect('administrar/mediciones');
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
        Mediciones::destroy($id);

        Session::flash('flash_message', 'Mediciones deleted!');

        return redirect('administrar/mediciones');
    }
}
