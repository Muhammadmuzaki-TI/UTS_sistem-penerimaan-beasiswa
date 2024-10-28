<?php

namespace App\Filament\Resources\MahasiswaResource\Pages;


use App\Filament\Resources\MahasiswaResource\Pages;
use App\Models\Mahasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class MahasiswaResource extends Resource
{
    protected static ?string $model = Mahasiswa::class;
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Mahasiswa';
    protected static ?string $pluralModelLabel = 'Mahasiswa';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('nama_lengkap')->required()->label('Nama Lengkap'),
            TextInput::make('nim')->unique()->required()->label('NIM'),
            DatePicker::make('tanggal_lahir')->label('Tanggal Lahir'),
            TextInput::make('alamat')->label('Alamat')->columnSpan('full'),
            TextInput::make('telepon')->label('Telepon'),
            TextInput::make('email')->label('Email'),
            TextInput::make('fakultas')->label('Fakultas'),
            TextInput::make('jurusan')->label('Jurusan'),
            TextInput::make('semester')->numeric()->label('Semester'),
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
            'index' => Pages\ListMahasiswas::route('/'),
            'create' => Pages\CreateMahasiswa::route('/create'),
            'edit' => Pages\EditMahasiswa::route('/{record}/edit'),
        ];
    }
}
