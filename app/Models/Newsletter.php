<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    protected $fillable = [
        'series',
        'series_acr',
        'cover_alumni',
        'published_date',
        'title',
        'docs_url',
    ];

    protected $dates = ['published_date'];
}
