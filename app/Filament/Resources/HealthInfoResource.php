<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HealthInfoResource\Pages;
use App\Filament\Resources\HealthInfoResource\RelationManagers;
use App\Models\HealthInfo;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\MaxWidth;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HealthInfoResource extends Resource
{
    protected static ?string $model = HealthInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-beaker';

    protected static ?string $navigationGroup = 'Health Info';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([


                Section::make(' ')->schema(
                    [
                        TextInput::make('title')
                            ->required()
                            ->columnSpan(2),
                        RichEditor::make('description')
                            ->nullable()
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'italic',
                                'redo',
                                'underline',
                                'undo',
                            ])
                            ->columnSpan(2),
                        RichEditor::make('chemical_structure')
                            ->nullable()
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'italic',
                                'redo',
                                'underline',
                                'undo',
                            ])
                            ->columnSpan(2),
                        RichEditor::make('characteristics')
                            ->nullable()
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'italic',
                                'redo',
                                'underline',
                                'undo',
                            ])
                            ->columnSpan(2),
                        RichEditor::make('process')
                            ->nullable()
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'italic',
                                'redo',
                                'underline',
                                'undo',
                            ])
                            ->columnSpan(2),
                        RichEditor::make('effect')
                            ->nullable()
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'italic',
                                'redo',
                                'underline',
                                'undo',
                            ])
                            ->columnSpan(2),
                        RichEditor::make('age')
                            ->nullable()
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'italic',
                                'redo',
                                'underline',
                                'undo',
                            ])
                            ->columnSpan(2),
                    ]
                )
                    ->columns(2)
                    ->columnSpan(2),

                Section::make(' ')->schema(
                    [
                        FileUpload::make('img')
                            ->image()->directory('health/photos')
                            ->nullable(),

                        Toggle::make('status')
                            ->required(),

                        Toggle::make('featured')
                            ->required(),

                        TextInput::make('order')
                            ->required()
                            ->numeric()
                            ->default(0),
                    ]
                )
                    ->columns(1)
                    ->columnSpan(1),




            ])
            ->columns(3)
        ;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultPaginationPageOption(25)
            ->defaultSort('order', 'asc')
            ->reorderable('order')
            ->paginatedWhileReordering()
            ->recordUrl(null)
            ->columns([
                TextColumn::make('order')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('title')
                    ->searchable(),
                ToggleColumn::make('status'),
                ToggleColumn::make('featured'),

                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->slideOver()
                    ->closeModalByClickingAway(false)
                    ->modalWidth(MaxWidth::FiveExtraLarge),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageHealthInfos::route('/'),
        ];
    }
}
