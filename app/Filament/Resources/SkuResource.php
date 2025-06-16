<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkuResource\Pages;
use App\Filament\Resources\SkuResource\RelationManagers;
use App\Models\Sku;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class SkuResource extends Resource
{
    protected static ?string $model = Sku::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationParentItem = "Surat";
    protected static ?string $navigationGroup = 'Layanan Warga';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Data Pemohon')
                    ->schema([
                        Forms\Components\TextInput::make('nik')
                            ->label('NIK')
                            ->required()
                            ->length(16),
                        Forms\Components\TextInput::make('nama')
                            ->required(),
                        Forms\Components\TextInput::make('no_surat')
                            ->required(),
                        Forms\Components\TextInput::make('alamat')
                            ->required(),
                        Forms\Components\TextInput::make('no_hp')
                            ->label('No. HP')
                            ->tel(),
                        Forms\Components\TextInput::make('user_id')
                            ->default(2)
                    ])->columns(2),

                Forms\Components\Section::make('Data Usaha')
                    ->schema([
                        Forms\Components\TextInput::make('nama_usaha')
                            ->label('Nama Usaha'),
                        Forms\Components\TextInput::make('jenis_usaha')
                            ->label('Jenis Usaha'),
                        Forms\Components\TextInput::make('alamat_usaha')
                            ->label('Alamat Usaha'),
                        Forms\Components\TextInput::make('sejak')
                            ->label('Beroperasi Sejak'),
                        Forms\Components\TextInput::make('kondisi')
                            ->label('Kondisi Usaha'),
                    ])->columns(2),

                Forms\Components\Section::make('Status')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->options([
                                'Pending' => 'Pending',
                                'Setujui' => 'Setujui',
                                'Ditolak' => 'Ditolak',
                            ])
                            ->default('Pending')
                            ->required(),
                        Forms\Components\FileUpload::make('file_surat')
                            ->label('File Surat')
                            ->directory('surat-keterangan-usaha')
                            ->preserveFilenames(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no_surat')
                    ->label('No. Surat')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nik')
                    ->label('NIK')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_usaha')
                    ->label('Nama Usaha')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_usaha')
                    ->label('Jenis Usaha')
                    ->searchable(),
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'Pending',
                        'success' => 'Setujui',
                        'danger' => 'Ditolak',
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'Pending' => 'Pending',
                        'Setujui' => 'Setujui',
                        'Ditolak' => 'Ditolak',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListSkus::route('/'),
            'create' => Pages\CreateSku::route('/create'),
            'edit' => Pages\EditSku::route('/{record}/edit'),
        ];
    }
}
