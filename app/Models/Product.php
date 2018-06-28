<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    public function comments()
    {
        $this->hasMany(Comment::class);
    }
}
