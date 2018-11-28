@extends('layout');

@section('content')
    
    <h3>Alunos</h3>
    @foreach($alunos as $w)
        <p>{{$w->nome}}-{{$w->matricula}}-{{$w->email}}-{{$w->cidade_id}}</p>
    @endforeach
@endsection