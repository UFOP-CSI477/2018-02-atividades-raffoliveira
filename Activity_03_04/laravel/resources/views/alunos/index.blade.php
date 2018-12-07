@extends('layout')

@section('conteudo')

  <h1>Alunos</h1>

  @foreach($alunos as $e)

<p><a href="{{ route('alunos.show', $e->id) }}">{{ $e->nome }}-{{ $e->rua }}-{{ $e->numero }}-{{ $e->bairro }}-{{ $e->cidade_id }}-{{ $e->cep }}-{{ $e->mail }}</a></p>

@endforeach


@endsection
