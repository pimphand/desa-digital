<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuratResource\Pages;
use App\Filament\Resources\SuratResource\RelationManagers;
use App\Models\Surat;
use Filament\Forms;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Form;
use Filament\Navigation\NavigationGroup;
use Filament\Panel;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuratResource extends Resource
{
    protected static ?string $model = Surat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Layanan Warga';
    protected static ?string $navigationLabel = 'Surat';

    public function panel(Panel $panel): Panel
    {
        return $panel
            ->navigationGroups([
                NavigationGroup::make()
                    ->label('Shop')
                    ->icon('heroicon-o-shopping-cart'),
                NavigationGroup::make()
                    ->label('Blog')
                    ->icon('heroicon-o-pencil'),
                NavigationGroup::make()
                    ->icon('heroicon-o-cog-6-tooth')
                    ->collapsed(),
            ]);
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('List Surat')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Informasi Surat')
                            ->schema([
                                Forms\Components\TextInput::make('code')
                                    ->label('Kode Surat')
                                    ->required()
                                    ->unique(ignoreRecord: true),
                                Forms\Components\TextInput::make('name')
                                    ->label('Nama Surat')
                                    ->required(),
                                Forms\Components\TextInput::make('icon')
                                    ->label('Icon')
                                    ->required(),
                                Forms\Components\TextInput::make('tooltip')
                                    ->label('Tooltip')
                                    ->required(),
                                Forms\Components\Toggle::make('is_active')
                                    ->label('Status Aktif')
                                    ->default(true),
                            ]),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('code')
                    ->label('Kode')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
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
    public function getTabs(): array
    {
        return [
            'all' => Tab::make('Semua Surat')
                ->badge(SuratResource::getModel()::count()),
            'active' => Tab::make('Aktif')
                ->badge(SuratResource::getModel()::where('is_active', true)->count())
                ->modifyQueryUsing(fn($query) => $query->where('is_active', true)),
            'inactive' => Tab::make('Tidak Aktif')
                ->badge(SuratResource::getModel()::where('is_active', false)->count())
                ->modifyQueryUsing(fn($query) => $query->where('is_active', false)),
        ];
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
            'index' => Pages\ListSurats::route('/'),
            'create' => Pages\CreateSurat::route('/create'),
            'edit' => Pages\EditSurat::route('/{record}/edit'),
        ];
    }
}
