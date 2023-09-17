<?php

namespace App\Filament\Resources\PenjaringAlumniResource\Pages;

use App\Filament\Resources\PenjaringAlumniResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Konnco\FilamentImport\Actions\ImportAction;
use Konnco\FilamentImport\Actions\ImportField;

class ListPenjaringAlumnis extends ListRecords
{
    protected static string $resource = PenjaringAlumniResource::class;

    protected function getActions(): array
    {
        return [
            ImportAction::make()
                ->uniqueField('nim')
                ->color('success')
                ->fields([
                    ImportField::make('name')
                        ->label('Nama')
                        ->required(),
                    ImportField::make('jenis_kelamin')
                        ->label('Jenis Kelamin')
                        ->required(),
                    ImportField::make('program_studi')
                        ->label('Program Studi')
                        ->required(),
                    ImportField::make('fakultas')
                        ->label('Fakultas')
                        ->required(),
                    ImportField::make('nim')
                        ->label('NIM')
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
        ];
    }
}