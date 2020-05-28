<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelLike\Traits\Likeable;

/**
 * @property mixed description
 * @property mixed rating
 * @property mixed location
 * @property mixed category
 * @property string review
 * @property mixed price
 * @property int|string|null user_id
 * @property mixed title
 * @property mixed tag
 * @property public_id
 * @property  url
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
