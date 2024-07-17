<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoyaltiResource\Pages;
use App\Filament\Resources\RoyaltiResource\RelationManagers;
use App\Models\Royalti;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use App\Models\Periode;
use Carbon\Carbon;
use DateTime;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;


class RoyaltiResource extends Resource
{
    protected static ?string $model = Royalti::class;
	
	protected static ?string $navigationGroup = 'Laporan';

    protected static ?string $navigationLabel = 'Royalti';

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Select::make('kd_user')
                    ->relationship('User', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('kd_periode')
                    ->relationship('periode', 'nm_periode')
                    ->required(),
                TextInput::make('general')
                    ->numeric()
                    ->prefix('Rp')
                    ->maxValue(42949672.95),
                TextInput::make('optimasi')
                    ->numeric()
                    ->prefix('Rp')
                    ->maxValue(42949672.95),
                TextInput::make('pending')
                    ->numeric()
                    ->prefix('Rp')
                    ->maxValue(42949672.95),
                FileUpload::make('detail_royalti')
                    ->label('File Detail Royalti CSV')
                    ->openable()
                    ->downloadable()
                    ->maxSize(5000),
                FileUpload::make('general_pdf')
                    ->label('File Detail Royalti pdf')
                    ->openable()
                    ->downloadable()
                    ->maxSize(5000),
                FileUpload::make('optimasi_pdf')
                    ->label('File Optimasi PDF')
                    ->openable()
                    ->downloadable()
                    ->maxSize(5000),
                SpatieMediaLibraryFileUpload::make('bukti_transfer')
                    ->label('File Bukti Transfer')
                    ->openable()
                    ->downloadable()
                    ->maxSize(5000),
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
                TextColumn::make('periode.nm_periode')
                    ->label('Kode Periode')
                    ->sortable()
                    ->toggleable()
                    ->searchable(),
                TextColumn::make('general')
                    ->money('IDR')
                    ->sortable()
                    ->summarize([
                        Tables\Columns\Summarizers\Sum::make()
                            ->money('IDR')
                            ->label('Jumlah General'),
                    ]),
                TextColumn::make('optimasi')
                    ->toggleable()
                    ->money('IDR')
                    ->label('Optimasi')
                    ->summarize([
                        Tables\Columns\Summarizers\Sum::make()
                            ->money('IDR')
                            ->label('Jumlah Optimasi'),
                    ]),
                TextColumn::make('pending')
                    ->toggleable()
                    ->money('IDR')
                    ->label('Pending')
                    ->summarize([
                        Tables\Columns\Summarizers\Sum::make()
                            ->money('IDR')
                            ->label('Jumlah Pending'),
                    ]),

            ])
            ->filters([
                Tables\Filters\SelectFilter::make('kd_periode')
                    ->label('Periode')
                    ->options(function () {
                        // Ambil data periode dari database
                        return Periode::pluck('nm_periode', 'id')->toArray();
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make()->label('Lihat Royalti'),
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
            'index' => Pages\ListRoyaltis::route('/'),
            'create' => Pages\CreateRoyalti::route('/create'),
            'edit' => Pages\EditRoyalti::route('/{record}/edit'),
        ];
    }
}
