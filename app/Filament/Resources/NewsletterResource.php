<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsletterResource\Pages;
use App\Filament\Resources\NewsletterResource\RelationManagers;
use App\Models\Newsletter;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Facades\App;

class NewsletterResource extends Resource
{
    protected static ?string $model = Newsletter::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Pages';

    public static function form(Form $form): Form
    {
        App::setLocale('id');
        return $form
            ->schema([
                Forms\Components\TextInput::make('series')
                    ->label('Nama Seri')
                    ->maxLength(255),
                Forms\Components\TextInput::make('series_acr')
                    ->label('Kode Seri')
                    ->maxLength(255),
                Forms\Components\TextInput::make('cover_alumni')
                    ->label('Sosok Alumni')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('published_date')
                    ->label('Tanggal Terbit')
                    ->displayFormat('d F Y')
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('docs_url')
                    ->label('ID Link Google Drive')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('series')
                    ->label('Nama Seri'),
                Tables\Columns\TextColumn::make('series_acr')
                    ->label('Kode Seri'),
                Tables\Columns\TextColumn::make('cover_alumni')
                    ->label('Sosok Alumni'),
                Tables\Columns\TextColumn::make('published_date')
                    ->label('Edisi')
                    ->date('F Y'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul'),
                Tables\Columns\TextColumn::make('docs_url')
                    ->label('ID Link Google Drive'),
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
            'index' => Pages\ListNewsletters::route('/'),
            'create' => Pages\CreateNewsletter::route('/create'),
            'edit' => Pages\EditNewsletter::route('/{record}/edit'),
        ];
    }
}
