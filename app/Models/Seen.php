<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seen extends Model
{
    use HasFactory;


    public function message() {
        return $this->belongsTo(Message::class);
    }

    protected $fillable = [
        "user_id",
        "streaming_id",
        "message_id"
    ];
}
