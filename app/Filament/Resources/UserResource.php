<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationLabel = 'Member';

    protected static ?string $navigationGroup = 'Users';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

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
        Forms\Components\Section::make('Informasi Dasar')
            ->description('Masukkan informasi dasar tentang komposer')
            ->schema([
                Forms\Components\TextInput::make('nik')
                    ->label('NIK')
                    ->nullable(),
                Forms\Components\TextInput::make('username')
                    ->label('Nama Lengkap')
                    ->nullable(),
                Forms\Components\TextInput::make('nama_pp')
                    ->label('Nama PP')
                    ->nullable(),
                Forms\Components\TextInput::make('t_lahir')
                    ->label('Tempat Lahir')
                    ->nullable(),
                Forms\Components\DatePicker::make('tgl_lahir')
                    ->label('Tanggal Lahir')
                    ->nullable(),
                Forms\Components\Textarea::make('alamat')
                    ->label('Alamat')
                    ->columnSpan('full')
                    ->nullable(),
                Forms\Components\TextInput::make('kabupaten')
                    ->label('Kabupaten')
                    ->nullable(),
                Forms\Components\TextInput::make('no_telp')
                    ->label('No Telp')
                    ->nullable(),
            ])
            ->columns(2),
            Forms\Components\Section::make('Informasi Kontrak')
            ->description('Masukkan informasi kontrak komposer')
            ->schema([
                Forms\Components\TextInput::make('dur_kontrak')
                    ->label('Durasi Kontrak')
                    ->nullable(),
                Forms\Components\DatePicker::make('end_kontrak')
                    ->label('end Kontrak')
                    ->nullable(),
            ])
            ->columns(2),
        Forms\Components\Section::make('Informasi Pembayaran')
            ->description('Masukkan informasi pembayaran komposer')
            ->schema([
                Forms\Components\TextInput::make('nm_bank')
                    ->label('Nama Bank')
                    ->nullable(),
                Forms\Components\TextInput::make('no_rek')
                    ->label('No Rekening')
                    ->nullable(),
                Forms\Components\TextInput::make('nm_rek')
                    ->label('Nama Rekening')
                    ->nullable(),
                Forms\Components\TextInput::make('no_npwp')
                    ->label('No NPWP')
                    ->nullable(),
                Forms\Components\TextInput::make('nm_npwp')
                    ->label('Nama NPWP')
                    ->nullable(),
            ])
             ->columns(2),
             Forms\Components\Section::make('Informasi Login')
             ->description('Informasi login digunakan untuk masuk ke akun Damarlangit')
              ->schema([
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
                Forms\Components\Select::make('roles')
                     ->relationship('roles', 'name')
                     ->preload()     
             ])
             ->columns(2),

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

                Tables\Columns\TextColumn::make('dur_kontrak')->label('Durasi Kontrak')
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_kontrak')
                    ->label('End Kontrak')
                    ->formatStateUsing(function ($state, $record) {
                        return $record->remaining_time;
                    })
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('end_kontrak')
                    ->label('End Kontrak')
                    ->options(function () {
                        return User::pluck('end_kontrak', 'end_kontrak')
                            ->filter()
                            ->unique()
                            ->toArray();
                    }),
            ])

            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make()->label('Lihat Member'),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
