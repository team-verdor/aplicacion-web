<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Plantas;
use Illuminate\Http\Request;
use Session;

class PlantasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $plantas = Plantas::paginate(25);

        return view('admin.plantas.index', compact('plantas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.plantas.create');
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
        
        Plantas::create($requestData);

        Session::flash('flash_message', 'Plantas added!');

        return redirect('administrar/plantas');
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
        $planta = Plantas::findOrFail($id);

        return view('admin.plantas.show', compact('planta'));
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
        $planta = Plantas::findOrFail($id);

        return view('admin.plantas.edit', compact('planta'));
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
        
        $planta = Plantas::findOrFail($id);
        $planta->update($requestData);

        Session::flash('flash_message', 'Plantas updated!');

        return redirect('administrar/plantas');
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
        Plantas::destroy($id);

        Session::flash('flash_message', 'Plantas deleted!');

        return redirect('administrar/plantas');
    }
}
