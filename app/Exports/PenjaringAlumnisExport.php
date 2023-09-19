<?php

namespace App\Exports;

use App\Models\PenjaringAlumni;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PenjaringAlumnisExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return PenjaringAlumni::all();
    }

    public function headings(): array
    {
        return [
            'id',
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
            'posisi',
            'created_at',
            'update_at'
        ];
    }
}