@extends('layout')

<!-- @section('titulo')
  List of Students
@endsection -->

@section('titulo','List of Students')

@section('content')
    <h1>List of Class</h1>

    @foreach ($alunos as $a)
      <li>{{$a}}</li>
    @endforeach
@endsection
