<?php

namespace App\Filament\Resources;

use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use App\Filament\Resources\PenjaringAlumniResource\Pages;
use App\Filament\Resources\PenjaringAlumniResource\RelationManagers;
use App\Models\PenjaringAlumni;
use Filament\Forms;
use Illuminate\Database\Eloquent\Collection;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Rap2hpoutre\FastExcel\FastExcel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class PenjaringAlumniResource extends Resource
{
    protected static ?string $model = PenjaringAlumni::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nim')
                    ->maxLength(255),
                Forms\Components\TextInput::make('fakultas')
                    ->maxLength(255),
                Forms\Components\TextInput::make('program_studi')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tahun_masuk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tahun_lulus')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenis_kelamin')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone_number')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('alamat')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tempat_kerja')
                    ->maxLength(255),
                Forms\Components\TextInput::make('alamat_kerja')
                    ->maxLength(255),
                Forms\Components\TextInput::make('posisi')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('nim')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fakultas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('program_studi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun_masuk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun_lulus')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_kelamin'),
                Tables\Columns\TextColumn::make('phone_number')
                    ->label('Nomor Hp'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('alamat'),
                Tables\Columns\TextColumn::make('tempat_kerja')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat_kerja')
                    ->searchable(),
                Tables\Columns\TextColumn::make('posisi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                FilamentExportBulkAction::make('export')
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenjaringAlumnis::route('/'),
            'create' => Pages\CreatePenjaringAlumni::route('/create'),
            'edit' => Pages\EditPenjaringAlumni::route('/{record}/edit'),
        ];
    }
    // public static function downloadPdfFile($namaFile): BinaryFileResponse
    // {
    //     return response()->download(public_path("{$namaFile}"));
    // }
    // public function exportPenjaring()
    // {
    //     // $penjaringanAlumni = PenjaringAlumni::All();
    //     // return (new FastExcel(PenjaringAlumni::all()))->download('users.xlsx');

    //     $namaFile = "Alumni.xlsx";

    //     (new fastexcel(PenjaringAlumni::exportData()))->export("{$namaFile}");

    //     return PenjaringAlumniResource::downloadPdfFile("{$namaFile}");


    // }
}