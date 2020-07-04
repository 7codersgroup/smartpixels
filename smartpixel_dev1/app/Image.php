<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
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
 * @property mixed public_id
 * @property  string url
 * @method static where(string $string, string $string1, $imageId)
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
        'url', 'title', 'description', 'tags', 'category', 'location', 'price', 'rating', 'user_id', 'tag'
    ];

	public static function find ($imageId)
	{

    }
    public function category ()
    {
        return $this->hasOne (Category::class);
    }
}
