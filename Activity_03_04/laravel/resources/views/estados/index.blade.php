@extends('layout')

@section('content')
    <h3>Estados</h3>
    
    @foreach($estados as $e)
        <p>{{$e->nome}}-{{$e->sigla}}</p>
    @endforeach
@endsection