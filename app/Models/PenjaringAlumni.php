<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjaringAlumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nim',
        'fakultas',
        'program_studi',
        'tahun_masuk',
        'tahun_lulus',
        'jenis_kelamin',
        'phone_number',
        'email',
        'alamat',
        'tempat_kerja',
        'alamat_kerja',
        'posisi'
    ];
}