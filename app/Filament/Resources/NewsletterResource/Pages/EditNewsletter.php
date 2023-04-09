<?php

namespace App\Filament\Resources\NewsletterResource\Pages;

use App\Filament\Resources\NewsletterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsletter extends EditRecord
{
    protected static string $resource = NewsletterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
