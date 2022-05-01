<?php

namespace App\Models;

use App\Models\Day;
use App\Models\Schedule;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory;

    public function days() {
        return $this->hasMany(Day::class);
    }

    public function users() {
        return $this->hasMany(User::class);
    }


    protected $fillable = [
        "max_members",
        "name"
    ];


}
