@extends('layout')

@section('conteudo')

  <h1>Editar Cidades</h1>

  <form method="post" action="{{ route('cidades.update', $cidades->id) }}">

    @csrf
    @method('PATCH')

      <p>Nome: <input type="text" name="nome" value="{{ $cidades->nome }}"></p>
      <p>Estado_ID: <input type="text" name="estado_id" value="{{ $cidades->estado_id }}"></p>

      <input type="submit" name="btnSalvar" value="Salvar">

  </form>

@endsection

