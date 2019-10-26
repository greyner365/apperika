<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $table = "categorias";
  protected $fillable = ['nombre'];

  public function blogs(){
  return $this->hasMany('App\New','id_categoria','id');

  }
  
}
