<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KatalogResource\Pages;
use App\Filament\Resources\KatalogResource\Pages\ListKatalogId;
use App\Filament\Resources\KatalogResource\RelationManagers;
use App\Models\Katalog;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;


class KatalogResource extends Resource 
{
    protected static ?string $model = Katalog::class;

    protected static ?string $navigationGroup = 'Katalog';

    protected static ?string $navigationLabel = 'Lihat Semua Katalog'; 

    protected static ?string $navigationIcon = 'heroicon-o-musical-note';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\DatePicker::make('tgl_submit')
                //     ->label('Tanggal Submit')
                //     ->required(),
                Forms\Components\Select::make('Nama Member')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\TextInput::make('judul_lagu')
                    ->label('Judul Lagu')
                    ->maxLength(100)
                    ->required(),
                Forms\Components\TextInput::make('performer')
                    ->label('Performer')
                    ->maxLength(100)
                    ->required(),
                Forms\Components\TextInput::make('composer')
                    ->label('Composer')
                    ->maxLength(50)
                    ->required(),
                Forms\Components\TextInput::make('song_control')
                    ->label('Song Control')
                    ->maxLength(5)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Nama Member')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('judul_lagu')
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('performer')
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('composer')
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('song_control')
                    ->toggleable()
                    ->searchable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('performer')
                    ->label('performer')
                    ->options(function () {
                        return Katalog::pluck('performer', 'performer')
                            ->filter()
                            ->unique()
                            ->toArray();
                    }),
                // Tables\Filters\SelectFilter::make('song_control')
                //     ->label('song_control')
                //     ->options(function () {
                //         return Katalog::pluck('song_control', 'song_control')
                //             ->filter()
                //             ->unique()
                //             ->toArray();
                //     }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make()-> label('lihat'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    ExportBulkAction::make(),
                ]),
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
            'index' => Pages\ListKatalogs::route('/'),
            'create' => Pages\CreateKatalog::route('/create'),
            'edit' => Pages\EditKatalog::route('/{record}/edit'),

        ];
    }

}
