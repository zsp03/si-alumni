<?php
namespace App\Filament\Resources\PenjaringAlumniResource\Pages;

use App\Filament\Resources\PenjaringAlumniResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Pages\Actions\Action;
// use App\Exports\PenjaringAlumnisExport;
use App\Models\PenjaringAlumni;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Pages\Actions;
use Konnco\FilamentImport\Actions\ImportAction;
use Konnco\FilamentImport\Actions\ImportField;
use Rap2hpoutre\FastExcel\FastExcel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;


class ListPenjaringAlumnis extends ListRecords
{
    protected static string $resource = PenjaringAlumniResource::class;

    protected function getActions(): array
    {
        return array_merge(parent::getActions(), [
            Action::make('export')
                ->button()
                ->color('success')
                ->action('export')
                ->requiresconfirmation(fn(PenjaringAlumni $records) => ($records->count()) >= 1000)
                ->modalSubHeading('Proses ini akan memakan waktu beberapa menit jika terdapat banyak data')
                ->modalHidden(fn(PenjaringAlumni $records) => ($records->count()) < 1000),
            ImportAction::make()
                ->uniqueField('nim')
                ->color('warning')
                ->fields([
                    ImportField::make('name')
                        ->label('Nama')
                        ->required(),
                    ImportField::make('nim')
                        ->label('NIM')
                        ->required(),
                    ImportField::make('fakultas')
                        ->label('Fakultas')
                        ->required(),
                    ImportField::make('program_studi')
                        ->label('Program Studi')
                        ->required(),
                    ImportField::make('tahun_masuk')
                        ->label('Tahun Masuk')
                        ->required(),
                    ImportField::make('tahun_lulus')
                        ->label('Tahun Lulus')
                        ->required(),
                    ImportField::make('jenis_kelamin')
                        ->label('Jenis Kelamin')
                        ->required(),
                    ImportField::make('No. Handphone')
                        ->label('Phone Number')
                        ->required(),
                    ImportField::make('email')
                        ->label('Email')
                        ->required(),
                    ImportField::make('alamat')
                        ->label('Alamat Tempat Kerja')
                        ->required(),
                    ImportField::make('posisi')
                        ->label('Posisi di Tempat Kerja')
                        ->required()
                ]),
            Actions\CreateAction::make(),
        ]);
    }




    public function downloadPdfFile($namaFile): BinaryFileResponse
    {

        return response()->download(public_path("{$namaFile}"))->deleteFileAfterSend();
    }

    public function export()
    {
        $namaFile = "PenjaringAlumnis.xlsx";

        (new FastExcel(PenjaringAlumni::exportData()))->export("{$namaFile}");

        return ListPenjaringAlumnis::downloadPdfFile("{$namaFile}");
    }
}