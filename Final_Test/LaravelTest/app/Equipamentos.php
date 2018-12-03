<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipamentos extends Model
{

    protected $fillable = ['nome'];


//retornar valores de registros
    public function registros(){

      return $this->hasMany('App\Registros','equipamento_id');
    }
}
