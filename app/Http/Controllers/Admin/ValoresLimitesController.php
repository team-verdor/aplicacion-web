<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\ValoresLimites;
use Illuminate\Http\Request;
use Session;

class ValoresLimitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $valoreslimites = ValoresLimites::paginate(25);

        return view('admin.valores-limites.index', compact('valoreslimites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.valores-limites.create');
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
        
        ValoresLimites::create($requestData);

        Session::flash('flash_message', 'ValoresLimites added!');

        return redirect('administrar/valores-limites');
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
        $valoreslimite = ValoresLimites::findOrFail($id);

        return view('admin.valores-limites.show', compact('valoreslimite'));
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
        $valoreslimite = ValoresLimites::findOrFail($id);

        return view('admin.valores-limites.edit', compact('valoreslimite'));
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
        
        $valoreslimite = ValoresLimites::findOrFail($id);
        $valoreslimite->update($requestData);

        Session::flash('flash_message', 'ValoresLimites updated!');

        return redirect('administrar/valores-limites');
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
        ValoresLimites::destroy($id);

        Session::flash('flash_message', 'ValoresLimites deleted!');

        return redirect('administrar/valores-limites');
    }
}
