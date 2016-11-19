<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\ExamenesVisuales;
use Illuminate\Http\Request;
use Session;

class ExamenesVisualesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $examenesvisuales = ExamenesVisuales::paginate(25);

        return view('admin.examenes-visuales.index', compact('examenesvisuales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.examenes-visuales.create');
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
        
        ExamenesVisuales::create($requestData);

        Session::flash('flash_message', 'ExamenesVisuales added!');

        return redirect('administrar/examenes-visuales');
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
        $examenesvisuale = ExamenesVisuales::findOrFail($id);

        return view('admin.examenes-visuales.show', compact('examenesvisuale'));
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
        $examenesvisuale = ExamenesVisuales::findOrFail($id);

        return view('admin.examenes-visuales.edit', compact('examenesvisuale'));
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
        
        $examenesvisuale = ExamenesVisuales::findOrFail($id);
        $examenesvisuale->update($requestData);

        Session::flash('flash_message', 'ExamenesVisuales updated!');

        return redirect('administrar/examenes-visuales');
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
        ExamenesVisuales::destroy($id);

        Session::flash('flash_message', 'ExamenesVisuales deleted!');

        return redirect('administrar/examenes-visuales');
    }
}
