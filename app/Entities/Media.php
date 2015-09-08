<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Media extends Model implements Transformable
{
    use TransformableTrait;


    protected $table = 'medias';

    protected $fillable = ['url'];


    public function section()
    {
        return $this->hasOne('Article');
    }

    public function user()
    {
        return $this->hasOne('User');
    }

}
