<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $fillable = [
        'reference', 'req_amount', 'amount_paid', 'status', 'channel',
    ];

    public function user() {
        return $this->belongsTo (User::class);
    }
}
