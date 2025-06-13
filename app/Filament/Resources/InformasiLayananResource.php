<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformasiLayananResource\Pages;
use App\Filament\Resources\InformasiLayananResource\RelationManagers;
use App\Models\Layanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformasiLayananResource extends Resource
{
    protected static ?string $model = Layanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Layanan Warga';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(1)
                    ->schema([
                        Forms\Components\Card::make()
                            ->schema([
                                Forms\Components\TextInput::make('nama_layanan')
                                    ->required()
                                    ->label('Nama Layanan'),
                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->label('Slug'),
                                Forms\Components\Select::make('kategori')
                                    ->required()
                                    ->options([
                                        'Kesehatan' => 'Kesehatan',
                                        'Pendidikan' => 'Pendidikan',
                                        'Infrastruktur' => 'Infrastruktur',
                                        'Surat' => 'Surat',
                                        'Lainnya' => 'Lainnya',
                                    ])
                                    ->label('Kategori'),
                                Forms\Components\TextInput::make('kontak')
                                    ->label('Kontak')
                                    ->placeholder('Nomor telepon atau email'),
                                Forms\Components\TextInput::make('lokasi')
                                    ->label('Lokasi'),
                                Forms\Components\TextInput::make('jadwal')
                                    ->label('Jadwal'),
                                Forms\Components\TextInput::make('biaya')
                                    ->numeric()
                                    ->default(0)
                                    ->label('Biaya'),
                                Forms\Components\Select::make('status')
                                    ->required()
                                    ->options([
                                        'aktif' => 'Aktif',
                                        'tidak_aktif' => 'Tidak Aktif',
                                    ])
                                    ->default('aktif')
                                    ->label('Status'),
                                Forms\Components\RichEditor::make('deskripsi')
                                    ->required()
                                    ->label('Deskripsi')
                                    ->columnSpanFull(),
                            ])

                            ->columns(2)
                    ]),

                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Repeater::make('persyaratan')
                            ->schema([
                                Forms\Components\TextInput::make('document')
                                    ->required()
                                    ->label('Dokumen'),
                                Forms\Components\TextInput::make('keterangan')
                                    ->required()
                                    ->label('Keterangan'),
                            ])
                            ->columns(2)
                            ->label('Persyaratan')
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),

                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Repeater::make('prosedur')
                            ->schema([
                                Forms\Components\TextInput::make('langkah')
                                    ->required()
                                    ->label('Langkah'),
                                Forms\Components\TextInput::make('keterangan')
                                    ->required()
                                    ->label('Keterangan'),
                            ])
                            ->columns(2)
                            ->label('Prosedur')
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),

                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\FileUpload::make('lampiran')
                            ->label('Lampiran')
                            ->directory('layanan-lampiran')
                            ->acceptedFileTypes(['application/pdf', 'image/*'])
                            ->maxSize(5120) // 5MB
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_layanan')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Layanan'),
                Tables\Columns\TextColumn::make('kategori')
                    ->searchable()
                    ->sortable()
                    ->label('Kategori'),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'aktif' => 'success',
                        'tidak_aktif' => 'danger',
                    })
                    ->formatStateUsing(fn(string $state): string => match ($state) {
                        'aktif' => 'Aktif',
                        'tidak_aktif' => 'Tidak Aktif',
                    }),
                Tables\Columns\TextColumn::make('kontak')
                    ->searchable()
                    ->label('Kontak'),
                Tables\Columns\TextColumn::make('biaya')
                    ->money('IDR')
                    ->sortable()
                    ->label('Biaya'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->label('Dibuat'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'aktif' => 'Aktif',
                        'tidak_aktif' => 'Tidak Aktif',
                    ])
                    ->label('Status'),
                Tables\Filters\SelectFilter::make('kategori')
                    ->options([
                        'Kesehatan' => 'Kesehatan',
                        'Pendidikan' => 'Pendidikan',
                        'Infrastruktur' => 'Infrastruktur',
                        'Surat' => 'Surat',
                        'Lainnya' => 'Lainnya',
                    ])
                    ->label('Kategori'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListInformasiLayanans::route('/'),
            'create' => Pages\CreateInformasiLayanan::route('/create'),
            'edit' => Pages\EditInformasiLayanan::route('/{record}/edit'),
        ];
    }
}
