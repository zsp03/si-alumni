<?php

namespace App\Exports;

use App\Models\Alumni;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class AlumnisExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Alumni::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'nim',
            'name',
            'program_studi',
            'fakultas',
            'jenis_kelamin',
            'phone_number',
            'show_phone_number',
            'email',
            'show_email',
            'user_id',
            'created_at',
            'update_at'
        ];
    }
}