@extends('layout')

@section('conteudo')

  <h1>Aluno: {{ $alunos->nome }} </h1>

  <p>Código: {{ $alunos->id }}</p>
  <p>Nome: {{ $alunos->nome }}</p>
  <p>Rua: {{ $alunos->rua }}</p>
  <p>Número: {{ $alunos->numero }}</p>
  <p>Bairro: {{ $alunos->bairro }}</p>
  <p>Cidade_ID: {{ $alunos->cidade->nome }}</p>
  <p>Cep: {{ $alunos->cep }}</p>
  <p>Email: {{ $alunos->mail }}</p>

  <a href="{{ route('alunos.index') }}">Voltar</a>
  <a href="{{ route('alunos.edit', $alunos->id) }}">Editar</a>

  <form method="post" action="{{ route('alunos.destroy', $alunos->id) }}" onsubmit="return confirm('Confirma exclusão do Estado: {{ $alunos->nome }} ?');" >

    @csrf
    @method('DELETE')
    <input type="submit" value="Excluir">

  </form>


@endsection