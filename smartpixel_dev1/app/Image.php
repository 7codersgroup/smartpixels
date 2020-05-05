<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelLike\Traits\Likeable;

/**
 * @property mixed description
 */
class Image extends Model
{
	use Likeable;
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url','title', 'description', 'tags', 'category', 'location', 'price', 'rating', 'user_id', 'tag'
    ];
	
	public static function find ($imageId)
	{
	
	}
}
