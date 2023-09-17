<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjaringAlumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'jenis_kelamin',
        'program_studi',
        'fakultas',
        'nim',
        'phone_number',
        'email',
        'alamat',
        'tempat_kerja',
        'alamat_kerja',
        'posisi'
    ];
}