<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homework extends Model
{
    protected $table = "homeworks";
    protected $fillable = ['file','descripcion','id_lessons','id_students'];

    public function home_topic()
    {
        return $this->hasOne('App\Topic','id_lessons','id');
    }

    public function home_student()
    {
        return $this->hasOne('App\Students','id_students','id');
    }
}
