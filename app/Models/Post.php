<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image_featured',
        'image_featured_url',
        'content',
        'status'
    ];

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function shortContent() : string
    {
        return Str::words(strip_tags($this->content), words:30);
    }
}
