<?php
namespace App\Filament\Resources\AlumniResource\Pages;

use App\Filament\Resources\AlumniResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Pages\Actions\Action;
use App\Exports\AlumnisExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Alumni;
use Filament\Forms;
use Konnco\FilamentImport\Actions\ImportAction;
use Konnco\FilamentImport\Actions\ImportField;
use Filament\Pages\Actions;

class ListAlumnis extends ListRecords
{
    protected static string $resource = AlumniResource::class;

    protected function getActions(): array
    {
        return array_merge(parent::getActions(), [
            Action::make('export')
                ->button()
                ->color('success')
                ->action('export'),
            ImportAction::make()
                ->uniqueField('nim')
                ->color('warning')
                ->fields([
                    ImportField::make('nim')
                        ->label('NIM')
                        ->required(),
                    ImportField::make('name')
                        ->label('Nama')
                        ->required(),
                    ImportField::make('program_studi')
                        ->label('Program Studi')
                        ->required(),
                    ImportField::make('fakultas')
                        ->label('Fakultas')
                        ->required(),
                    ImportField::make('jenis_kelamin')
                        ->label('Jenis Kelamin')
                        ->required(),
                    ImportField::make('phone_number')
                        ->label('Phone Number')
                        ->required(),
                    ImportField::make('email')
                        ->label('Email')
                        ->required()
                ]),
            Actions\CreateAction::make(),
        ]);
    }

    public function export()
    {
        return Excel::download(new AlumnisExport, 'alumnis.xlsx');
    }
}