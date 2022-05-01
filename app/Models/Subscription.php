<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }



    protected $fillable = [
        "user_id",
        'group_id',
        "start_day",
        'end_day',
        "expired",
        'payment_method',
        'amount',
        'payed_at'
    ];
    
}
