<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Offering extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company',
        'type',
        'location',
        'hasLink',
        'link',
        'open',
        'close',
        'requirement',
        'logo',
        'logo_url',
        'description',
    ];

    public function shortContent() : string
    {
        return Str::words(strip_tags($this->description), words:30);
    }
}
