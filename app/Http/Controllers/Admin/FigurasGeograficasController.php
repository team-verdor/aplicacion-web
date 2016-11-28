<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\FigurasGeograficas;
use Illuminate\Http\Request;
use Session;

class FigurasGeograficasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $figurasgeograficas = FigurasGeograficas::paginate(25);

        return view('admin.figuras-geograficas.index', compact('figurasgeograficas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.figuras-geograficas.create');
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
        
        FigurasGeograficas::create($requestData);

        Session::flash('flash_message', 'FigurasGeograficas added!');

        return redirect('administrar/figuras-geograficas');
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
        $figurasgeografica = FigurasGeograficas::findOrFail($id);

        return view('admin.figuras-geograficas.show', compact('figurasgeografica'));
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
        $figurasgeografica = FigurasGeograficas::findOrFail($id);

        return view('admin.figuras-geograficas.edit', compact('figurasgeografica'));
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
        
        $figurasgeografica = FigurasGeograficas::findOrFail($id);
        $figurasgeografica->update($requestData);

        Session::flash('flash_message', 'FigurasGeograficas updated!');

        return redirect('administrar/figuras-geograficas');
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
        FigurasGeograficas::destroy($id);

        Session::flash('flash_message', 'FigurasGeograficas deleted!');

        return redirect('administrar/figuras-geograficas');
    }
}
