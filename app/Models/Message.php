<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function streaming() {
        return $this->belongsTo(Streaming::class);
    }

    protected $fillable = [
        "message",
        "streaming_id",
        "user_id"
    ];
}
