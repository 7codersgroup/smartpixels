<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banking extends Model
{
    protected $fillable = [
        'bank_name', 'account_no', 'account_holder', 'user_id'
    ];
}
