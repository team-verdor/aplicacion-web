<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Sensores;
use Illuminate\Http\Request;
use Session;

class SensoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $sensores = Sensores::paginate(25);

        return view('admin.sensores.index', compact('sensores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.sensores.create');
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
        
        Sensores::create($requestData);

        Session::flash('flash_message', 'Sensores added!');

        return redirect('administrar/sensores');
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
        $sensore = Sensores::findOrFail($id);

        return view('admin.sensores.show', compact('sensore'));
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
        $sensore = Sensores::findOrFail($id);

        return view('admin.sensores.edit', compact('sensore'));
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
        
        $sensore = Sensores::findOrFail($id);
        $sensore->update($requestData);

        Session::flash('flash_message', 'Sensores updated!');

        return redirect('administrar/sensores');
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
        Sensores::destroy($id);

        Session::flash('flash_message', 'Sensores deleted!');

        return redirect('administrar/sensores');
    }
}
