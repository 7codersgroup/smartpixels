<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
<<<<<<< Updated upstream
    /*
=======
    //
    /**
>>>>>>> Stashed changes
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< Updated upstream
        'name', 'detail'
=======
        'url','title', 'description', 'tags', 'category', 'location', 'price', 'rating'
>>>>>>> Stashed changes
    ];
}
