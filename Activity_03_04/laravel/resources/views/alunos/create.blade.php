@extends('layout')

@section('conteudo')

  <h1>Editar Alunos</h1>

  <form method="post" action="/alunos">

    @csrf
    
    <p>Nome: <input type="text" name="nome"></p>
    <p>Rua: <input type="text" name="rua"></p>
    <p>Número: <input type="text" name="numero"></p>
    <p>Bairro: <input type="text" name="bairro" ></p>
    <p>Cidade_ID:</p>
    <select name="cidade_id">
      @foreach($cidades as $e)
        <option value="{{ $e->id }}">{{ $e->nome }}</option>
      @endforeach
    </select>
    <p>Cep: <input type="text" name="cep"></p>
    <p>Email: <input type="text" name="mail"></p>

    <input type="submit" name="btnSalvar" value="Incluir">

</form>

@endsection