@extends('layout')MgMg

@section('conteudo')

  <h1>Cidade: {{ $cidades->nome }}-{{ $cidades->estado_id }} </h1>

  <p>Código: {{ $cidades->id }}</p>
  <p>Nome: {{ $cidades->nome }}</p>
  <p>Estado_ID: {{ $cidades->estado_id }}</p>

  <a href="{{ route('cidades.index') }}">Voltar</a>
  <a href="{{ route('cidades.edit', $cidades->id) }}">Editar</a>




@endsection