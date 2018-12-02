<?php

namespace App\Http\Controllers;

use App\Equipamentos;
use Illuminate\Http\Request;

class EquipamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equi = Equipamentos::orderBy('nome')->get();
        return view('administrativa/index')->with('administrativa',$equi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Equipamentos::create($request->all());
        return redirect()->route('administrativa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipamentos  $equipamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamentos $equipamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipamentos  $equipamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipamentos $equipamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipamentos  $equipamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipamentos $equipamentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipamentos  $equipamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipamentos $equipamentos)
    {
        //
    }
}
