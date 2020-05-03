<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed description
 */
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
	
	public static function find ($imageId)
	{
	
	}
}
