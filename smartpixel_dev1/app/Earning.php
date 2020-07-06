<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Earning extends Model
{
    protected $table = 'earning';
    protected $fillable = [
        'user_id', 'current_balance', 'last_withdrawal_amount', 'total_withdrawal', 'total_income', 'last_withdrawal_date',
    ];

    public function user ()
    {
        return $this->belongsTo (User::class);
    }
}
