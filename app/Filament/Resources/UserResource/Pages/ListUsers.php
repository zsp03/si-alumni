<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Rap2hpoutre\FastExcel\FastExcel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Filament\Pages\Actions\Action;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return array_merge(parent::getActions(), [
            Action::make('export')
                ->button()
                ->color('success')
                ->action('export'),
            Actions\CreateAction::make(),
        ]);
    }

    public function downloadPdfFile($namaFile): BinaryFileResponse
    {
        return response()->download(public_path("{$namaFile}"));
    }
    public function export()
    {

        $namaFile = "User.xlsx";

        (new fastexcel(User::exportDataUser()))->export("{$namaFile}");

        return ListUsers::downloadPdfFile("{$namaFile}");


    }
}