<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model
{
    use HasFactory;
    public function newsAuthor(){
        return $this->belongsTo(NewsAuthor::class);
    }
    
    public function newsCategory(){
        return $this->belongsToMany(NewsCategory::class);
    }
}
