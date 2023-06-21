<?php

namespace App\Filament\Resources\OfferingResource\Pages;

use App\Filament\Resources\OfferingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOffering extends CreateRecord
{
    protected static string $resource = OfferingResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if ($data['logo'] !== null){
            $data['logo_url'] = Storage::disk()->url($data['logo']);
        }

        return $data;
    }
}
