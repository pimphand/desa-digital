<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileDesaResource\Pages;
use App\Filament\Resources\ProfileDesaResource\RelationManagers;
use App\Models\ProfileDesa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProfileDesaResource extends Resource
{
    protected static ?string $model = ProfileDesa::class;
    protected static ?string $navigationGroup = 'Desa';
    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('Tabs')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Informasi Umum')
                            ->schema([
                                Forms\Components\TextInput::make('nama')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('Masukkan nama desa'),
                                Forms\Components\TextInput::make('alamat')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('Masukkan alamat desa'),
                                Forms\Components\TextInput::make('telepon')
                                    ->maxLength(255)
                                    ->placeholder('Masukkan nomor telepon'),
                                Forms\Components\TextInput::make('email')
                                    ->email()
                                    ->maxLength(255)
                                    ->placeholder('Masukkan alamat email'),
                                Forms\Components\TextInput::make('website')
                                    ->url()
                                    ->maxLength(255)
                                    ->placeholder('Masukkan alamat website'),
                                Forms\Components\FileUpload::make('logo')
                                    ->image()
                                    ->directory('profile-desa/logo')
                                    ->placeholder('Upload logo desa'),
                                Forms\Components\FileUpload::make('thumbnail')
                                    ->image()
                                    ->directory('profile-desa/thumbnail')
                                    ->placeholder('Upload thumbnail desa'),
                            ]),
                        Forms\Components\Tabs\Tab::make('Banner')
                            ->schema([
                                Forms\Components\Repeater::make('banner_data')
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->required()
                                            ->maxLength(255)
                                            ->placeholder('Judul banner'),
                                        Forms\Components\Textarea::make('description')
                                            ->maxLength(1000)
                                            ->placeholder('Deskripsi banner'),
                                        Forms\Components\FileUpload::make('image')
                                            ->image()
                                            ->directory('profile-desa/banner')
                                            ->required()
                                            ->placeholder('Upload gambar banner'),
                                    ])
                                    ->columns(3)
                                    ->defaultItems(1),
                            ]),
                        Forms\Components\Tabs\Tab::make('Visi & Misi')
                            ->schema([
                                Forms\Components\TextInput::make('visi_misi.visi')
                                    ->maxLength(255)
                                    ->placeholder('Masukkan visi'),
                                Forms\Components\Repeater::make('visi_misi.misi')
                                    ->schema([
                                        Forms\Components\TextInput::make('item')
                                            ->maxLength(255)
                                            ->placeholder('Masukkan misi')
                                            ->required(),
                                    ]),
                            ]),
                        Forms\Components\Tabs\Tab::make('Batas Wilayah')
                            ->schema([
                                Forms\Components\TextInput::make('batas_wilayah.luas')
                                    ->label('Luas')
                                    ->placeholder('Masukkan luas wilayah'),
                                Forms\Components\TextInput::make('batas_wilayah.batas_utara')
                                    ->label('Batas Utara')
                                    ->placeholder('Masukkan batas utara'),
                                Forms\Components\TextInput::make('batas_wilayah.batas_selatan')
                                    ->label('Batas Selatan')
                                    ->placeholder('Masukkan batas selatan'),
                                Forms\Components\TextInput::make('batas_wilayah.batas_barat')
                                    ->label('Batas Barat')
                                    ->placeholder('Masukkan batas barat'),
                                Forms\Components\TextInput::make('batas_wilayah.batas_timur')
                                    ->label('Batas Timur')
                                    ->placeholder('Masukkan batas timur'),
                                Forms\Components\TextInput::make('lokasi.longitude')
                                    ->label('Longitude')
                                    ->placeholder('Masukkan longitude'),
                                Forms\Components\TextInput::make('lokasi.latitude')
                                    ->label('Latitude')
                                    ->placeholder('Masukkan latitude'),
                            ]),
                        Forms\Components\Tabs\Tab::make('Sejarah Desa')
                            ->schema([
                                Forms\Components\RichEditor::make('sejarah_desa')
                                    ->placeholder('Masukkan sejarah desa')
                                    ->toolbarButtons([
                                        'attachFiles',
                                        'blockquote',
                                        'bold',
                                        'bulletList',
                                        'codeBlock',
                                        'h2',
                                        'h3',
                                        'italic',
                                        'link',
                                        'orderedList',
                                        'redo',
                                        'strike',
                                        'underline',
                                        'undo',
                                    ]),
                            ]),
                    ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('alamat'),
                Tables\Columns\TextColumn::make('telepon'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('website'),
                Tables\Columns\ImageColumn::make('logo')
                    ->circular(),
                Tables\Columns\ImageColumn::make('thumbnail'),
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
            'index' => Pages\ListProfileDesas::route('/'),
            'create' => Pages\CreateProfileDesa::route('/create'),
            'edit' => Pages\EditProfileDesa::route('/{record}/edit'),
        ];
    }
}
