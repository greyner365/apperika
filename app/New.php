<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class New extends Model
{
  use Sluggable, SluggableScopeHelpers;

  public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }

    protected $table = "news";

    protected $fillable = ['titulo','descripcion','lugar','slug','image1','id_usuario','id_categoria'];

    public function category()
    {
        return $this->belongsTo('App\Categoria', 'id_categoria', 'id');
    }
}
