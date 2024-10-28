<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeasiswaResource\Pages;
use App\Models\Beasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class BeasiswaResource extends Resource
{
    protected static ?string $model = Beasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Beasiswa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_beasiswa')
                    ->required()
                    ->label('Nama Beasiswa'),
                TextInput::make('jenis_beasiswa')
                    ->label('Jenis Beasiswa'),
                TextArea::make('keterangan')
                    ->label('Keterangan')
                    ->columnSpan('full'),
                TextInput::make('nilai_beasiswa')
                    ->numeric()
                    ->label('Nilai Beasiswa'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_beasiswa')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('jenis_beasiswa')
                    ->sortable(),
                TextColumn::make('nilai_beasiswa')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('jenis_beasiswa')
                    ->options([
                        'Jenis A' => 'Jenis A',
                        'Jenis B' => 'Jenis B',
                        // Tambahkan jenis beasiswa lainnya sesuai kebutuhan
                    ])
                    ->label('Jenis Beasiswa'),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Tambahkan relasi jika ada
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBeasiswas::route('/'),
            'create' => Pages\CreateBeasiswa::route('/create'),
            'edit' => Pages\EditBeasiswa::route('/{record}/edit'),
        ];
    }
}
