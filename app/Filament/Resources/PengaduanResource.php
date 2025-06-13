<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengaduanResource\Pages;
use App\Filament\Resources\PengaduanResource\RelationManagers;
use App\Models\Pengaduan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengaduanResource extends Resource
{
    protected static ?string $model = Pengaduan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Layanan Warga';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('Pengaduan')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Data Pelapor')
                            ->schema([
                                Forms\Components\TextInput::make('judul')
                                    ->required()
                                    ->label('Judul Pengaduan'),
                                Forms\Components\Select::make('kategori')
                                    ->required()
                                    ->options([
                                        'Infrastruktur' => 'Infrastruktur',
                                        'Kesehatan' => 'Kesehatan',
                                        'Pendidikan' => 'Pendidikan',
                                        'Keamanan' => 'Keamanan',
                                        'Lainnya' => 'Lainnya',
                                    ])
                                    ->label('Kategori'),
                                Forms\Components\RichEditor::make('deskripsi')
                                    ->required()
                                    ->label('Deskripsi Pengaduan')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('lampiran')
                                    ->label('Lampiran')
                                    ->directory('pengaduan-lampiran')
                                    ->columnSpanFull(),
                                Forms\Components\Toggle::make('show_to_public')
                                    ->label('Tampilkan ke Publik')
                                    ->default(true),
                            ]),
                        Forms\Components\Tabs\Tab::make('Tanggapan')
                            ->schema([
                                Forms\Components\Select::make('prioritas')
                                    ->options([
                                        'Tinggi' => 'Tinggi',
                                        'Sedang' => 'Sedang',
                                        'Rendah' => 'Rendah',
                                    ])
                                    ->label('Prioritas'),
                                Forms\Components\Select::make('status')
                                    ->options([
                                        'pending' => 'Belum ditanggapi',
                                        'processing' => 'Sedang diproses',
                                        'completed' => 'Selesai',
                                        'rejected' => 'Ditolak',
                                    ])
                                    ->default('pending')
                                    ->label('Status'),
                                Forms\Components\RichEditor::make('tanggapan')
                                    ->label('Tanggapan')
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable()
                    ->sortable()
                    ->label('Judul Pengaduan'),
                Tables\Columns\TextColumn::make('kategori')
                    ->searchable()
                    ->sortable()
                    ->label('Kategori'),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'pending' => 'gray',
                        'processing' => 'warning',
                        'completed' => 'success',
                        'rejected' => 'danger',
                    })
                    ->formatStateUsing(fn(string $state): string => match ($state) {
                        'pending' => 'Belum ditanggapi',
                        'processing' => 'Sedang diproses',
                        'completed' => 'Selesai',
                        'rejected' => 'Ditolak',
                    }),
                Tables\Columns\TextColumn::make('prioritas')
                    ->badge()
                    ->color(fn(?string $state): string => match ($state) {
                        'Tinggi' => 'danger',
                        'Sedang' => 'warning',
                        'Rendah' => 'success',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->label('Tanggal Pengaduan'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'Belum ditanggapi',
                        'processing' => 'Sedang diproses',
                        'completed' => 'Selesai',
                        'rejected' => 'Ditolak',
                    ])
                    ->label('Status'),
                Tables\Filters\SelectFilter::make('prioritas')
                    ->options([
                        'Tinggi' => 'Tinggi',
                        'Sedang' => 'Sedang',
                        'Rendah' => 'Rendah',
                    ])
                    ->label('Prioritas'),
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
            'index' => Pages\ListPengaduans::route('/'),
            'view' => Pages\ViewPengaduan::route('/{record}'),
            'edit' => Pages\EditPengaduan::route('/{record}/edit'),
        ];
    }
}
