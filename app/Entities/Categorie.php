<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Categorie extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['title'];

    protected $table = 'Articles';


    public function article()
    {
        return $this->hasMany('Article');
    }


    public function section()
    {
        return $this->belongsTo('Section');
    }

}
