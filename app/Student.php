<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $table = "students";
  protected $fillable = ['primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','sexo','telefono','id_usuario'];

  public function student_user()
  {
      return $this->belongsTo('App\User', 'id_usuario', 'id');
  }

}
