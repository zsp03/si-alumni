<?php

namespace App\Filament\Resources\OfferingResource\Pages;

use App\Filament\Resources\OfferingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOfferings extends ListRecords
{
    protected static string $resource = OfferingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
