<?php

namespace App\Http\Controllers;

use App\equipamentos;
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
        return view('geral/index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\equipamentos  $equipamentos
     * @return \Illuminate\Http\Response
     */
    public function show(equipamentos $equipamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\equipamentos  $equipamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(equipamentos $equipamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\equipamentos  $equipamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, equipamentos $equipamentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\equipamentos  $equipamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(equipamentos $equipamentos)
    {
        //
    }
}
