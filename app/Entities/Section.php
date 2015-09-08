<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Section extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'Sections';

    protected $fillable = ['title'];


    public function categorie()
    {
        return $this->hasMany('Categorie');
    }


}
