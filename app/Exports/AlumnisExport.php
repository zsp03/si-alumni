<?php

namespace App\Exports;

use App\Models\Alumni;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Rap2hpoutre\FastExcel\FastExcel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class AlumnisExport
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function downloadPdfFile($namaFile): BinaryFileResponse
    {
        return response()->download(public_path("{$namaFile}"));
    }
    public function export()
    {

        $namaFile = "User.xlsx";

        (new fastexcel(Alumni::exportDataAlumni()))->export("{$namaFile}");

        return AlumnisExport::downloadPdfFile("{$namaFile}");


    }
}