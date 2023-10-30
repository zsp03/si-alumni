<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OfferingResource\Pages;
use App\Filament\Resources\OfferingResource\RelationManagers;
use App\Models\Offering;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use InvadersXX\FilamentJsoneditor\Forms\JSONEditor;

class OfferingResource extends Resource
{
    protected static ?string $model = Offering::class;
    protected static ?string $navigationLabel = 'Jobs';
    protected static ?string $navigationIcon = 'heroicon-o-fire';
    protected static ?string $navigationGroup = 'Pages';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('company')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('type')
                    ->options([
                        'Full Time',
                        'Part Time',
                    ])
                    ->default('Full Time')
                    ->disablePlaceholderSelection()
                    ->required(),
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Grid::make(2)
                    ->schema([
                        Forms\Components\TextInput::make('link')
                            ->maxLength(255),
                        Forms\Components\Select::make('hasLink')
                            ->options([
                                true => 'Use External Link',
                                false => 'Contact Only',
                            ])
                            ->default(true)
                            ->disablePlaceholderSelection()
                            ->required()
                    ]),
                Forms\Components\Grid::make(2)
                    ->schema([
                        Forms\Components\DatePicker::make('open')
                            ->required(),
                        Forms\Components\DatePicker::make('close')
                            ->required(),
                    ]),

                Forms\Components\Grid::make(1)
                    ->schema([
                        JSONEditor::make('requirement')
                            ->required()
                    ]),

                Forms\Components\Grid::make(1)
                    ->schema([
                        Forms\Components\Section::make('Featured Image')
                            ->schema([
                                Forms\Components\FileUpload::make('logo')
                                    ->label('Upload')
                                    ->image()
                                    ->reactive()
                                    ->directory('jobs-images')
                                    ->afterStateUpdated(function (Closure $set, $state) {
                                        $set('logo_url', Storage::disk()->url($state->getRealPath()));
                                    }),
                                Forms\Components\TextInput::make('logo_url')
                                    ->label('URL')
                                    ->disabled(fn (Closure $get) => count($get('logo')) !== 0),
                            ]),
                    ]),

                Forms\Components\Grid::make(1)
                    ->schema([
                        \FilamentTiptapEditor\TiptapEditor::make('description')
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('location'),
                Tables\Columns\IconColumn::make('hasLink')
                    ->boolean(),
                Tables\Columns\TextColumn::make('link'),
                Tables\Columns\TextColumn::make('open')
                    ->date(),
                Tables\Columns\TextColumn::make('close')
                    ->date(),
                Tables\Columns\TextColumn::make('requirement'),
                Tables\Columns\TextColumn::make('description'),
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
            'index' => Pages\ListOfferings::route('/'),
            'create' => Pages\CreateOffering::route('/create'),
            'edit' => Pages\EditOffering::route('/{record}/edit'),
        ];
    }
}