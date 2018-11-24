@extends('layout')

@section('content')
    
    <h3>Cidades</h3>
    @foreach($cidades as $fla)
        <p>{{$fla->nome}}-{{$fla->estado_id}}</p>
    @endforeach
@endsection

