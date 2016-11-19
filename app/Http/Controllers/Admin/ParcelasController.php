<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Parcelas;
use Illuminate\Http\Request;
use Session;

class ParcelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $parcelas = Parcelas::paginate(25);

        return view('admin.parcelas.index', compact('parcelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.parcelas.create');
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
        
        Parcelas::create($requestData);

        Session::flash('flash_message', 'Parcelas added!');

        return redirect('administrar/parcelas');
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
        $parcela = Parcelas::findOrFail($id);

        return view('admin.parcelas.show', compact('parcela'));
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
        $parcela = Parcelas::findOrFail($id);

        return view('admin.parcelas.edit', compact('parcela'));
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
        
        $parcela = Parcelas::findOrFail($id);
        $parcela->update($requestData);

        Session::flash('flash_message', 'Parcelas updated!');

        return redirect('administrar/parcelas');
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
        Parcelas::destroy($id);

        Session::flash('flash_message', 'Parcelas deleted!');

        return redirect('administrar/parcelas');
    }
}
