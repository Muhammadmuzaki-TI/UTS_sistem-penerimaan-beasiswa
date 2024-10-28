<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenerimaBeasiswaResource\Pages;
use App\Filament\Resources\PenerimaBeasiswaResource\RelationManagers;
use App\Models\PenerimaBeasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenerimaBeasiswaResource extends Resource
{
    protected static ?string $model = PenerimaBeasiswa::class;

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
            'index' => Pages\ListPenerimaBeasiswas::route('/'),
            'create' => Pages\CreatePenerimaBeasiswa::route('/create'),
            'edit' => Pages\EditPenerimaBeasiswa::route('/{record}/edit'),
        ];
    }
}
