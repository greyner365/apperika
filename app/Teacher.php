<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = "teachers";
    protected $fillable = ['primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','sexo','telefono','profecion','id_usuario'];
    public function users()
  	{
  	    return $this->belongsTo('App\User','id_usuario','id');
  	}
}
