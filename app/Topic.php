<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = "topics";
    protected $fillable = ['titulo','descripcion','slug','link','homework','id_lessons'];

    public function topic_leccion()
    {
        return $this->belongsTo('App\Lesson', 'id_lessons', 'id');
    }
}
