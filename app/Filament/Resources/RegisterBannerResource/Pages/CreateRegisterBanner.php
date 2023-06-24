<?php

namespace App\Filament\Resources\RegisterBannerResource\Pages;

use App\Filament\Resources\RegisterBannerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Storage;

class CreateRegisterBanner extends CreateRecord
{
    protected static string $resource = RegisterBannerResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if ($data['image_featured'] !== null){
            $data['image_featured_url'] = Storage::disk()->url($data['image_featured']);
        }

        return $data;
    }
}
