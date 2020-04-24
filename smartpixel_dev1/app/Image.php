<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url','title', 'description', 'tags', 'category', 'location', 'price', 'rating', 'user_id', 'tag'
    ];
}
