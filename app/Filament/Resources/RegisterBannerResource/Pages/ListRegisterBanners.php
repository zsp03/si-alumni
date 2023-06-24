<?php

namespace App\Filament\Resources\RegisterBannerResource\Pages;

use App\Filament\Resources\RegisterBannerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegisterBanners extends ListRecords
{
    protected static string $resource = RegisterBannerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
