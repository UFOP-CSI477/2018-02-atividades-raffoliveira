<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'rua', 'numero', 'bairro', 'cidade_id', 'cep', 'mail'];

    public function cidades(){
        return $this->hasOne('App\Cidade');
    }
}
