<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = "lessons";
    protected $fillable = ['nombre','descripcion','id_curso'];

    public function leccion_cursos()
    {
        return $this->belongsTo('App\Course', 'id_curso', 'id');
    }
}
