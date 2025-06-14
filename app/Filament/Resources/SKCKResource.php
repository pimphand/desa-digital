<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SKCKResource\Pages;
use App\Filament\Resources\SKCKResource\RelationManagers;
use App\Models\Skck;
use App\Services\SKCKDocumentService;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpWord\TemplateProcessor;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class SKCKResource extends Resource
{
    protected static ?string $model = Skck::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('no_surat')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->label('Nomor Surat')
                            ->placeholder('Contoh: 470/001/SKCK/VI/2024'),
                        Forms\Components\TextInput::make('nama')
                            ->required()
                            ->label('Nama Lengkap')
                            ->placeholder('Masukkan nama lengkap sesuai KTP'),
                        Forms\Components\TextInput::make('nik')
                            ->required()
                            ->label('NIK')
                            ->length(16)
                            ->placeholder('Masukkan 16 digit NIK'),
                        Forms\Components\TextInput::make('tempat_lahir')
                            ->required()
                            ->label('Tempat Lahir')
                            ->placeholder('Contoh: Jakarta'),
                        Forms\Components\DatePicker::make('tanggal_lahir')
                            ->required()
                            ->label('Tanggal Lahir')
                            ->placeholder('Pilih tanggal lahir'),
                        Forms\Components\Select::make('jenis_kelamin')
                            ->required()
                            ->options([
                                'L' => 'Laki-laki',
                                'P' => 'Perempuan',
                            ])
                            ->label('Jenis Kelamin')
                            ->placeholder('Pilih jenis kelamin'),
                        Forms\Components\Hidden::make('user_id')
                            ->default(function () {
                                return Auth::check() ? Auth::id() : null;
                            })
                            ->required(),
                    ])
                    ->columns(2)
                    ->heading('Data Pribadi'),
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('alamat')
                            ->required()
                            ->label('Alamat')
                            ->placeholder('Masukkan alamat lengkap')
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('rt')
                            ->required()
                            ->label('RT')
                            ->placeholder('Contoh: 001'),
                        Forms\Components\TextInput::make('rw')
                            ->required()
                            ->label('RW')
                            ->placeholder('Contoh: 002'),
                        Forms\Components\TextInput::make('dusun')
                            ->required()
                            ->label('Dusun')
                            ->placeholder('Contoh: Dusun Krajan'),
                        Forms\Components\TextInput::make('kelurahan')
                            ->required()
                            ->label('Kelurahan')
                            ->placeholder('Contoh: Kelurahan Sukabumi'),
                        Forms\Components\TextInput::make('kecamatan')
                            ->required()
                            ->label('Kecamatan')
                            ->placeholder('Contoh: Kecamatan Sukabumi'),
                    ])
                    ->columns(2)
                    ->heading('Alamat'),

                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('agama')
                            ->required()
                            ->label('Agama')
                            ->placeholder('Contoh: Islam'),
                        Forms\Components\TextInput::make('pekerjaan')
                            ->required()
                            ->label('Pekerjaan')
                            ->placeholder('Contoh: Wiraswasta'),
                        Forms\Components\TextInput::make('kewarganegaraan')
                            ->required()
                            ->label('Kewarganegaraan')
                            ->placeholder('Contoh: WNI'),
                        Forms\Components\Select::make('status_perkawinan')
                            ->required()
                            ->options([
                                'Belum Kawin' => 'Belum Kawin',
                                'Kawin' => 'Kawin',
                                'Cerai Hidup' => 'Cerai Hidup',
                                'Cerai Mati' => 'Cerai Mati',
                            ])
                            ->label('Status Perkawinan')
                            ->placeholder('Pilih status perkawinan'),
                        Forms\Components\TextInput::make('keperluan')
                            ->required()
                            ->label('Keperluan')
                            ->placeholder('Contoh: Melamar pekerjaan')
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->heading('Informasi Tambahan'),
                Forms\Components\Hidden::make('file_surat'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no_surat')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('download')
                    ->label('Lihat Surat')
                    ->icon('heroicon-o-document-arrow-down')
                    ->modalContent(fn(Skck $record) => view('filament.resources.skck-resource.pages.view-document', [
                        'url' => 'https://docs.google.com/viewer?url=' . url('/storage/' . $record->file_surat) . '&embedded=true',
                    ]))
                    ->modalWidth('7xl')
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
            'index' => Pages\ListSKCKS::route('/'),
            'create' => Pages\CreateSKCK::route('/create'),
            'edit' => Pages\EditSKCK::route('/{record}/edit'),
        ];
    }
}
