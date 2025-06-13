<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IventarisResource\Pages;
use App\Filament\Resources\IventarisResource\RelationManagers;
use App\Models\Iventaris;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IventarisResource extends Resource
{
    protected static ?string $model = Iventaris::class;

    protected static ?string $navigationGroup = 'Desa';
    protected static ?string $navigationIcon = 'heroicon-o-cube';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Barang')
                    ->description('Detail informasi barang inventaris')
                    ->schema([
                        Forms\Components\Card::make()
                            ->schema([
                                Forms\Components\TextInput::make('nama')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('Masukkan nama barang')
                                    ->label('Nama Barang')
                                    ->columnSpan(1),
                                Forms\Components\TextInput::make('kategori')
                                    ->maxLength(255)
                                    ->placeholder('Masukkan kategori barang')
                                    ->label('Kategori Barang')
                                    ->columnSpan(1),
                                Forms\Components\TextInput::make('jumlah')
                                    ->required()
                                    ->numeric()
                                    ->default(0)
                                    ->placeholder('Masukkan jumlah barang')
                                    ->label('Jumlah Barang')
                                    ->columnSpan(1),
                                Forms\Components\TextInput::make('nomor_seri')
                                    ->maxLength(255)
                                    ->placeholder('Masukkan nomor seri barang')
                                    ->label('Nomor Seri')
                                    ->columnSpan(1),
                                Forms\Components\Select::make('kondisi')
                                    ->options([
                                        'Baik' => 'Baik',
                                        'Rusak' => 'Rusak',
                                        'Perlu Perbaikan' => 'Perlu Perbaikan',
                                    ])
                                    ->default('Baik')
                                    ->label('Kondisi Barang')
                                    ->columnSpan(1),
                            ])
                            ->columns(2),
                    ]),
                Forms\Components\Section::make('Detail Pengadaan')
                    ->description('Informasi pengadaan barang')
                    ->schema([
                        Forms\Components\Card::make()
                            ->schema([
                                Forms\Components\DatePicker::make('tanggal_pengadaan')
                                    ->placeholder('Pilih tanggal pengadaan')
                                    ->label('Tanggal Pengadaan')
                                    ->columnSpan(1),
                                Forms\Components\TextInput::make('sumber_pengadaan')
                                    ->maxLength(255)
                                    ->placeholder('Masukkan sumber pengadaan')
                                    ->label('Sumber Pengadaan')
                                    ->columnSpan(1),
                                Forms\Components\TextInput::make('harga')
                                    ->numeric()
                                    ->placeholder('Masukkan harga barang')
                                    ->label('Harga Barang')
                                    ->columnSpan(1),
                                Forms\Components\TextInput::make('lokasi')
                                    ->maxLength(255)
                                    ->placeholder('Masukkan lokasi penyimpanan')
                                    ->label('Lokasi Penyimpanan')
                                    ->columnSpan(1),
                            ])
                            ->columns(2),
                    ]),
                Forms\Components\Section::make('Informasi Tambahan')
                    ->schema([
                        Forms\Components\Card::make()
                            ->schema([
                                Forms\Components\Textarea::make('keterangan')
                                    ->placeholder('Masukkan keterangan tambahan')
                                    ->label('Keterangan Tambahan')
                                    ->columnSpan(1),
                                Forms\Components\FileUpload::make('foto')
                                    ->image()
                                    ->directory('iventaris-images')
                                    ->placeholder('Unggah foto barang')
                                    ->label('Foto Barang')
                                    ->columnSpan(1),
                            ])
                            ->columns(2),
                    ]),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kategori')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kondisi')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_pengadaan')
                    ->date()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('foto'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListIventaris::route('/'),
            'create' => Pages\CreateIventaris::route('/create'),
            'edit' => Pages\EditIventaris::route('/{record}/edit'),
        ];
    }
}
