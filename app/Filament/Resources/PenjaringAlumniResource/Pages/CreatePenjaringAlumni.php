<?php

namespace App\Filament\Resources\PenjaringAlumniResource\Pages;

use App\Filament\Resources\PenjaringAlumniResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePenjaringAlumni extends CreateRecord
{
    protected static string $resource = PenjaringAlumniResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }   
}