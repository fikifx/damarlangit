<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TophitsResource\Pages;
use App\Filament\Resources\TophitsResource\RelationManagers;
use App\Models\Tophits;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TophitsResource extends Resource implements HasShieldPermissions
{
    protected static ?string $model = Tophits::class;
	
	protected static ?string $navigationGroup = 'Upload Lagu';

    protected static ?string $navigationLabel = 'Top Hit'; 

    protected static ?string $navigationIcon = 'heroicon-o-trophy';
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\MarkdownEditor::make('judul_tophits')
                    ->columnSpan('full'),
                Forms\Components\TextInput::make('url_tophits')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul_tophits'),
                Tables\Columns\TextColumn::make('url_tophits'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListTophits::route('/'),
            'create' => Pages\CreateTophits::route('/create'),
            'edit' => Pages\EditTophits::route('/{record}/edit'),
        ];
    }

    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'create',
            'update',
            'delete',
            'publish'
        ];
    }
}
