<?php

namespace App\Filament\Resources\PenjaringAlumniResource\Pages;

use App\Filament\Resources\PenjaringAlumniResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenjaringAlumni extends EditRecord
{
    protected static string $resource = PenjaringAlumniResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
