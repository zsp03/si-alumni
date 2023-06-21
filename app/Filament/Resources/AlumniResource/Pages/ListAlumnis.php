<?php

namespace App\Filament\Resources\AlumniResource\Pages;

use App\Filament\Resources\AlumniResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Konnco\FilamentImport\Actions\ImportAction;
use Konnco\FilamentImport\Actions\ImportField;

class ListAlumnis extends ListRecords
{
    protected static string $resource = AlumniResource::class;
    protected static ?string $title = 'Data Alumni';

    protected function getActions(): array
    {
        return [
            ImportAction::make()
            ->uniqueField('nim')
            ->color('success')
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
        ];
    }
}
