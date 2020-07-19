<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'image_category';

    public function image()
    {
        return $this->belongsToMany(Image::class);
    }
}
