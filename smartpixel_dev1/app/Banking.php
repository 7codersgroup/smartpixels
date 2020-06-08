<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|Request|string bank_name
 * @property array|Request|string account_no
 * @property array|Request|string account_holder
 */
class Banking extends Model
{
    protected $fillable = [
        'bank_name', 'account_no', 'account_holder', 'user_id'
    ];
	
	public function user ()
	{
		return $this->belongsTo (User::class);
	}
}
