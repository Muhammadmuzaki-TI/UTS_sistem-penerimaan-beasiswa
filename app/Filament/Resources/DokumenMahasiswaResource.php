<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokumenMahasiswaResource\Pages;
use App\Filament\Resources\DokumenMahasiswaResource\RelationManagers;
use App\Models\DokumenMahasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DokumenMahasiswaResource extends Resource
{
    protected static ?string $model = DokumenMahasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListDokumenMahasiswas::route('/'),
            'create' => Pages\CreateDokumenMahasiswa::route('/create'),
            'edit' => Pages\EditDokumenMahasiswa::route('/{record}/edit'),
        ];
    }
}
