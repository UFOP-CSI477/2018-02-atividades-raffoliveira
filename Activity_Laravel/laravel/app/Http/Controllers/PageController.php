<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
      return view('welcome');
    }

    public  function about(){
      return view('sobre');
    }

    public function listar(){
      $alunos = ['Rafael', 'Sabrina', 'Olimpio', 'Hugo'];
      return view('lista')->with('alunos', $alunos);
    }

    public function contato(){
      return 'contato';
    }
}
