@extends('layout')

@section('conteudo')

  <h1>Cidade: {{ $cidades->nome }}-{{ $cidades->estado_id }} </h1>

  <p>Código: {{ $cidades->id }}</p>
  <p>Nome: {{ $cidades->nome }}</p>
  <p>Estado_ID: {{ $cidades->estado->nome }}</p>

  <a href="{{ route('cidades.index') }}">Voltar</a>
  <a href="{{ route('cidades.edit', $cidades->id) }}">Editar</a>

  <form method="post" action="{{ route('cidades.destroy', $cidades->id) }}" onsubmit="return confirm('Confirma exclusão do Estado: {{ $cidades->nome }} ?');" >

    @csrf
    @method('DELETE')
    <input type="submit" value="Excluir">

  </form>



@endsection