<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Registros extends Authenticatable
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['equipamento_id', 'descricao', 'datalimite', 'tipo'];

  public function equipamentosName(){
    return $this->hasMany('App\Equipamentos');
  }

}
