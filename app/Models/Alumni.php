<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Jetstream\HasProfilePhoto;

class Alumni extends Model
{
    use HasFactory;
    protected $fillable = [
        'nim',
        'name',
        'program_studi',
        'fakultas',
        'jenis_kelamin',
        'phone_number',
        'email',
        'user_id'
    ];
}
