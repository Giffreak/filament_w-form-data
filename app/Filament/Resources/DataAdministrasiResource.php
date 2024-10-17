<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DataAdministrasiResource\Pages;
use App\Filament\Resources\DataAdministrasiResource\RelationManagers;
use App\Models\DataAdministrasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataAdministrasiResource extends Resource
{
    protected static ?string $model = DataAdministrasi::class;

    protected static ?string $navigationIcon = 'heroicon-m-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kta_ink')
                    ->label('No KTA INKINDO')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('no_kadin')
                    ->label('No. Anggota Kadin')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_bu')
                    ->label('Nama Badan Usaha')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('alamat')
                    ->label('Alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telepon_kantor')
                    ->label('Telepon Kantor')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('website')
                    ->label('Website')
                    // ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('NPWP')
                    ->label('NPWP')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('NPWP')
                    ->label('Akta Pendirian')
                    ->required()
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
            'index' => Pages\ListDataAdministrasis::route('/'),
            'create' => Pages\CreateDataAdministrasi::route('/create'),
            'edit' => Pages\EditDataAdministrasi::route('/{record}/edit'),
        ];
    }
}
