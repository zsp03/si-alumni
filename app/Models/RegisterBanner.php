<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterBanner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image_featured',
        'image_featured_url',
        'isActive',
    ];
}
