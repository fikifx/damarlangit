<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationLabel = 'Team';
    
    protected static ?string $navigationGroup = 'Users';

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form

            ->schema([
                Forms\Components\Hidden::make('id')->disabled(),
                Forms\Components\Hidden::make('ip_address')
                    ->label('IP Address')
                    ->default(fn () => request()->ip())
                    ->nullable()
                    ->disabled(),
                Forms\Components\TextInput::make('username')
                    ->label('Username')
                    ->nullable(),
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->nullable(),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->revealable()
                    // ->dehydrateStateUsing(fn (string $state): string => Hash::make($state))
                    ->dehydrated(fn (?string $state): bool => filled($state))
                    ->required(fn (string $operation): bool => $operation === 'create'),
                Forms\Components\TextInput::make('nama_pp')
                    ->label('Nama PP')
                    ->nullable(),
                Forms\Components\TextInput::make('nik')
                    ->label('NIK')
                    ->nullable(),
                Forms\Components\TextInput::make('t_lahir')
                    ->label('Tempat Lahir')
                    ->nullable(),
                Forms\Components\DatePicker::make('tgl_lahir')
                    ->label('Tanggal Lahir')
                    ->nullable(),
                Forms\Components\Textarea::make('alamat')
                    ->label('Alamat')
                    ->nullable(),
                Forms\Components\TextInput::make('kabupaten')
                    ->label('Kabupaten')
                    ->nullable(),
                Forms\Components\TextInput::make('no_telp')
                    ->label('No Telp')
                    ->nullable(),
                Forms\Components\TextInput::make('no_npwp')
                    ->label('No NPWP')
                    ->nullable(),
                Forms\Components\TextInput::make('nm_npwp')
                    ->label('Nama NPWP')
                    ->nullable(),
                Forms\Components\TextInput::make('no_rek')
                    ->label('No Rekening')
                    ->nullable(),
                Forms\Components\TextInput::make('nm_bank')
                    ->label('Nama Bank')
                    ->nullable(),
                Forms\Components\TextInput::make('nm_rek')
                    ->label('Nama Rekening')
                    ->nullable(),

                Forms\Components\Select::make('roles')
                    ->relationship('roles', 'name')
                    ->preload()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),

                Tables\Columns\TextColumn::make('email')->label('Email')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')->label('Nama')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('roles.name')->label('Role')
                    ->sortable(),


            ])
            ->filters([])





            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
