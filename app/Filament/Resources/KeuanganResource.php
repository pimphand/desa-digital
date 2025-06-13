<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KeuanganResource\Pages;
use App\Filament\Resources\KeuanganResource\RelationManagers;
use App\Models\Keuangan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KeuanganResource extends Resource
{
    protected static ?string $model = Keuangan::class;

    protected static ?string $navigationGroup = 'Desa';
    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('jenis')
                    ->options([
                        'Pendapatan' => 'Pendapatan',
                        'Pengeluaran' => 'Pengeluaran',
                        'Investasi' => 'Investasi',
                    ])
                    ->required()
                    ->placeholder('Pilih jenis transaksi')
                    ->label('Jenis Transaksi'),
                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->placeholder('Masukkan deskripsi transaksi')
                    ->label('Deskripsi Transaksi'),
                Forms\Components\TextInput::make('jumlah')
                    ->required()
                    ->numeric()
                    ->placeholder('Masukkan jumlah uang')
                    ->label('Jumlah Uang'),
                Forms\Components\DatePicker::make('tanggal')
                    ->required()
                    ->placeholder('Pilih tanggal transaksi')
                    ->label('Tanggal Transaksi'),
                Forms\Components\FileUpload::make('file')
                    ->label('File Pendukung')
                    ->directory('keuangan-files')
                    ->placeholder('Unggah file pendukung')
                    ->acceptedFileTypes(['application/pdf', 'image/*']),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('jenis')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('jumlah')
                    ->numeric()
                    ->sortable()
                    ->money('IDR'),
                Tables\Columns\TextColumn::make('tanggal')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListKeuangans::route('/'),
            'create' => Pages\CreateKeuangan::route('/create'),
            'edit' => Pages\EditKeuangan::route('/{record}/edit'),
        ];
    }
}
