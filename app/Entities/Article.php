<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Article extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'Articles';

    protected $fillable = ['title','text'];



    public function categorie()
    {
        return $this->hasOne('Categorie');
    }

    public function section()
    {
        return $this->hasOne('Section');
    }

    public function user()
    {
        return $this->hasOne('User');
    }


}
