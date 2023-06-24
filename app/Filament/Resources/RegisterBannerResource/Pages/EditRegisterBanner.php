<?php

namespace App\Filament\Resources\RegisterBannerResource\Pages;

use App\Filament\Resources\RegisterBannerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditRegisterBanner extends EditRecord
{
    protected static string $resource = RegisterBannerResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if ($data['image_featured'] !== null){
            $data['image_featured_url'] = Storage::disk()->url($data['image_featured']);
        }

        return $data;
    }
}
