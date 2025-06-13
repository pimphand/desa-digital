<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PotensiDesaResource\Pages;
use App\Filament\Resources\PotensiDesaResource\RelationManagers;
use App\Models\Potensi;
use App\Models\PotensiDesa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PotensiDesaResource extends Resource
{
    protected static ?string $model = Potensi::class;
    protected static ?string $navigationGroup = 'Desa';

    protected static ?string $navigationIcon = 'heroicon-m-globe-europe-africa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Potensi'),

                Forms\Components\Select::make('jenis')
                    ->options([
                        'Sumber Daya Alam' => 'Sumber Daya Alam',
                        'Budaya' => 'Budaya',
                        'Pariwisata' => 'Pariwisata',
                    ])
                    ->nullable()
                    ->label('Jenis Potensi'),

                Forms\Components\TextInput::make('lokasi')
                    ->maxLength(255)
                    ->nullable()
                    ->label('Lokasi'),

                Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->directory('potensi-images')
                    ->nullable()
                    ->label('Gambar'),

                Forms\Components\TextInput::make('koordinat.lat')
                    ->numeric()
                    ->nullable()
                    ->label('Latitude'),

                Forms\Components\TextInput::make('koordinat.lng')
                    ->numeric()
                    ->nullable()
                    ->label('Longitude'),

                Forms\Components\RichEditor::make('deskripsi')
                    ->nullable()
                    ->label('Deskripsi')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Potensi'),

                Tables\Columns\TextColumn::make('jenis')
                    ->searchable()
                    ->sortable()
                    ->label('Jenis'),

                Tables\Columns\TextColumn::make('lokasi')
                    ->searchable()
                    ->sortable()
                    ->label('Lokasi'),

                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->label('Dibuat'),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->label('Diperbarui'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('jenis')
                    ->options([
                        'Sumber Daya Alam' => 'Sumber Daya Alam',
                        'Budaya' => 'Budaya',
                        'Pariwisata' => 'Pariwisata',
                    ])
                    ->label('Filter Jenis'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPotensiDesas::route('/'),
            'create' => Pages\CreatePotensiDesa::route('/create'),
            'edit' => Pages\EditPotensiDesa::route('/{record}/edit'),
        ];
    }
}
