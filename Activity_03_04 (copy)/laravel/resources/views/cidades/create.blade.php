@extends('layout')

@section('conteudo')

  <h1>Inserir Cidades</h1>

  <form method="post" action="/cidades">

    @csrf

      <p>Nome: <input type="text" name="nome"></p>
      <p>Estado_ID: <input type="text" name="estado_id"></p>

      <input type="submit" name="btnSalvar" value="Incluir">

  </form>


@endsection