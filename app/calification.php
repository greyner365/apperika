<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calification extends Model
{
    protected $table = "califications";
    protected $fillable = ['type','observacion','id_homeworks'];

    public function calification_home()
    {
        return $this->hasOne('App\homework','id_homeworks','id');
    }
}
