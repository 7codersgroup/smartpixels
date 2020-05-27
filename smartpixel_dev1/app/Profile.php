<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $table = 'profile';
	
	protected $fillable = [
		'country', 'phone', 'address', 'zip', 'user_id', 'city'
	];
	//private $zip;
	
	
	// Get the user that owns a profile
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
