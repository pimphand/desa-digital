<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationGroup = 'Desa';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan judul berita')
                    ->label('Judul Berita'),
                Forms\Components\Select::make('kategori')
                    ->options([
                        '' => 'Pilih salah satu opsi',
                        'Umum' => 'Umum',
                        'Pengumuman' => 'Pengumuman',
                    ])
                    ->required()
                    ->label('Kategori Berita'),
                Forms\Components\Hidden::make('penulis')
                    ->default(fn() => Auth::user()->name),
                Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->mimeTypeMap(['image/jpeg' => 'jpg', 'image/png' => 'png'])
                    ->directory('berita-images')
                    ->placeholder('Unggah gambar berita')
                    ->label('Gambar Berita'),
                Forms\Components\RichEditor::make('konten')
                    ->required()
                    ->placeholder('Tulis isi berita di sini')
                    ->label('Isi Berita'),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kategori')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('penulis')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('gambar'),
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
