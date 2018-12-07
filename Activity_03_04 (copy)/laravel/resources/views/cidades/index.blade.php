@extends('layout')

@section('conteudo')

  <h1>Cidades</h1>

  @foreach($cidades as $w)

    <p><a href="{{ route('cidades.show', $w->id) }}">{{ $w->nome }}-{{ $w->estado_id }}</a></p>

  @endforeach


@endsection