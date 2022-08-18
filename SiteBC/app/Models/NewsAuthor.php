<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsAuthor extends Model
{
    use HasFactory;
    public function newsPost(){
        return $this->hasMany(NewsPost::class);
    }
}
