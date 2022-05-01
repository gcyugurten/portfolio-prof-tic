<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Streaming extends Model
{
    use HasFactory;

    public function messages() {
        return $this->hasMany(Message::class);
    }

    protected $fillable = [
        "token",
        "channel",
        "group_id",
        "expired"
    ];
}
