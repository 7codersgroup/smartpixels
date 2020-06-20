<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'order_id', 'image_id',
    ];

    public function user() {
        return $this->belongsTo (User::class);
    }
}
