<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{


  protected $fillable = ['equipamento_id',
                         'descricao',
                         'datalimite',
                         'tipo'
                       ];

  public function equipamentos(){

    return $this->belongsTo('App\Equipamentos','equipamento_id');
  }

}
