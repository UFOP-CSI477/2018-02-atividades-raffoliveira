<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@index');
Route::get('/info','PageController@about');
Route::get('/lista','PageController@listar');
Route::get('/contato','PageController@contato');

//Route::get('/estados', 'EstadoController@index');
Route::resource('/estados','EstadoController');
Route::resource('/cidades','CidadeController');
Route::resource('/alunos','AlunoController');

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route::get('/info',function(){
//     return view('sobre');
//  });
//
// Route::get('/lista',function(){
//
//   $alunos = ['Rafael', 'Sabrina', 'Olimpio', 'Hugo'];
//   return view('lista')->with('alunos', $alunos);
// });
