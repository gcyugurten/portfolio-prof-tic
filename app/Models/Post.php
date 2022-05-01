<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "title",
        "summary",
        "content",
        "status",
        "slug"
    ];
    
    public function incrementReadCount() {
        $this->seens_count++;
        return $this->save();
    }
}
