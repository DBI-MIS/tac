<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrganicCategoryResource\Pages;
use App\Filament\Resources\OrganicCategoryResource\RelationManagers;
use App\Models\OrganicCategory;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class OrganicCategoryResource extends Resource
{
    protected static ?string $model = OrganicCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Products';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(' ')->schema(
                    [
                TextInput::make('title')
                    ->required()
                    ->label(__('Category'))
                    ->live(onBlur:true)
                    ->columnSpan(2)
                    ->afterStateUpdated(
                        function(string $operation, string $state, Forms\Set $set) {
                        if ($operation === 'edit'){
                            return;}
                    $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                ])->columnSpan(2),
                Section::make(' ')->schema(
                    [
                        ToggleButtons::make('text_color')->default('white')
                        ->required()
                        ->options([
                            'white' => 'white',
                            'blue' => 'blue',
                            'red' => 'red',
                            'yellow' => 'yellow',
                            'green' => 'green',
                            ])
                        ->grouped()
                        ->label(__('Text Color')),
                        ToggleButtons::make('bg_color')->default('blue')
                        ->required()
                        ->options([
                            'gray' => 'gray',
                            'blue' => 'blue',
                            'red' => 'red',
                            'yellow' => 'yellow',
                            'green' => 'green',
                            ])
                        ->grouped()
                        ->label(__('Background Color')),
                    ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('title')
                ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: false),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: false),
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
            'index' => Pages\ListOrganicCategories::route('/'),
            'create' => Pages\CreateOrganicCategory::route('/create'),
            'edit' => Pages\EditOrganicCategory::route('/{record}/edit'),
        ];
    }
}
