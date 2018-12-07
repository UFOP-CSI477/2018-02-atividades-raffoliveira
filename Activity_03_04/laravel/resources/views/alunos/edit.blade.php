
@extends('layout')

@section('conteudo')

  <h1>Editar Alunos</h1>

  <form method="post" action="{{ route('alunos.update', $alunos->id) }}">

    @csrf
    @method('PATCH')

      <p>Nome: <input type="text" name="nome" value="{{ $alunos->nome }}"></p>
      <p>Rua: <input type="text" name="rua" value="{{ $alunos->rua }}"></p>
      <p>Número: <input type="text" name="numero" value="{{ $alunos->numero }}"></p>
      <p>Bairro: <input type="text" name="bairro" value="{{ $alunos->bairro }}"></p>
      <p>Cidade_ID: <input type="text" name="cidade_id" value="{{ $alunos->cidade_id }}"></p>
      <p>Cep: <input type="text" name="cep" value="{{ $alunos->cep }}"></p>
      <p>Email: <input type="text" name="mail" value="{{ $alunos->mail }}"></p>
      
      <input type="submit" name="btnSalvar" value="Salvar">

</form>

@endsection