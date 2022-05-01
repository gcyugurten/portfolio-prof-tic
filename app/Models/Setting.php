<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        "facebook",
        "youtube",
        "instagram",
        "logo",
        "favicon",
        "description",
        "tags",
        "subscription_price"
    ];
}
