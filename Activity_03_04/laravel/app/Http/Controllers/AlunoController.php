<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Cidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {

        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        //if(Auth::check()){
            $alunos = Aluno::all();
            return view('alunos.index')->with('alunos',$alunos);
        //}else{
          //  return redirect()->route('login');
       // }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cidades = Cidade::orderBy('nome')->get();
        return view('alunos.create',[ 'cidades' => $cidades ] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aluno::create($request->all());
        return redirect('/alunos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        return view('alunos.show')->with('alunos',$aluno);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
       
        $cidades = Cidade::orderBy('nome')->get();
        return view('alunos.edit', [ 'alunos' => $aluno,'cidades' => $cidades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $aluno)
    {
        $aluno->fill($request->all());
        $aluno->save();

        session()->flash('mensagem', 'Aluno atualizado com sucesso.');
        return redirect()->route('alunos.show', $aluno->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {
        $aluno->delete();
        session()->flash('Aluno excluido com sucesso!');
        return redirect()->route('alunos.index');
    }
}
