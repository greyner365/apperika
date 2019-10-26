<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses";
    protected $fillable = ['nombre','descripcion','nivel','image','id_user'];

    public function cursos_lecciones(){

    return $this->hasMany('App\Lesson','id_curso','id');

    }
}
