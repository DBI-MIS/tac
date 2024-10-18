<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrganicProductResource\Pages;
use App\Filament\Resources\OrganicProductResource\RelationManagers;
use App\Models\OrganicProduct;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class OrganicProductResource extends Resource
{
    protected static ?string $model = OrganicProduct::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Products';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Main Content')->schema(
                    [
                        TextInput::make('title')
                        ->label('Product Name')
                        ->required()
                        ->live(onBlur:true)
                        ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                            if ($operation === 'edit') {
                                return;
                            }

                            $set('slug', Str::slug($state));

                        }),

                        Select::make('brand_id')
                        ->relationship('product_brand', 'name')
                        ->searchable()
                        ->preload()
                        ->nullable()
                        ->label(__('Brand')),

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
                        ]),

                        RichEditor::make('features')
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
                        ->label('Features'),

                        RichEditor::make('benefits')
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
                        ->columnSpanFull()
                        ->label('Benefits'),

                        RichEditor::make('storage')
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
                        ->columnSpanFull()
                        ->label('Storage Conditions'),

                        RichEditor::make('packaging')
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
                        ->columnSpanFull()
                        ->label('Packaging'),

                        RichEditor::make('usage')
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
                        ->columnSpanFull()
                        ->label('Usage'),

                    ]
                )->columnSpan(2),

                Section::make(' ')->schema(
                    [
                        Section::make(' ')->schema(
                            [
                                Toggle::make('featured')
                                ->required(),

                                Toggle::make('status')
                                ->required(),
                            ]
                            ),

                            FileUpload::make('product_img')
                            ->image()->directory('products/photos')
                            ->nullable(),

                           

                    Select::make('organicproductorganiccategories')
                    ->multiple()
                    ->relationship('organicproductorganiccategories', 'title')
                    ->searchable()
                    ->preload()
                    ->label(__('Product Categories'))
                    ->helperText('Note: Include the Brand'),

                    TagsInput::make('categories')
                    ->suggestions([
                        'virgin coconut oil',
                        'extra virgin coconut oil',
                        'health supplement',
                        'VCO',
                    ])
                    ->nestedRecursiveRules([
                        'min:3',
                        'max:255',
                    ])
                    ->label(__('Tags')),

                    TextInput::make('slug')
                    ->required()
                    ->minLength(1)->unique(ignoreRecord: true)->maxLength(150),

                    Select::make('user_id')
                    
                    ->searchable()
                    ->default('2')
                    ->required()
                    ->preload(),

                    ]
                )->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('product_img')
                ->wrap()
                ->label('Product'),
            TextColumn::make('title')
                ->searchable()
                ->label('Name'),
            TextColumn::make('product_brand.name')
                ->numeric()
                ->label('Brand')
                ->sortable()
                ->searchable(),
                TextColumn::make('categories')
                ->badge(),
            TextColumn::make('user_id')
                ->label('Created by')
                ->numeric()
                ->toggleable(isToggledHiddenByDefault: true)
                ->sortable(),
            ToggleColumn::make('status')
            ->label('Active')
            ->sortable(),
            ToggleColumn::make('featured')
            ->sortable(),
                
            
            TextColumn::make('slug')
            ->toggleable(isToggledHiddenByDefault: true)
                ->searchable(),
            
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
                
            ])
            ->defaultSort('updated_at', 'desc')
            ->defaultPaginationPageOption(50)
            ->striped()
            ->persistFiltersInSession()
            ->persistSortInSession()
            ->persistSearchInSession()
            ->persistColumnSearchesInSession()
            ->filters([
                SelectFilter::make('brand_id')
                    ->label('Select Brand')
                    ->relationship('product_brand', 'name'),
                TernaryFilter::make('featured')
                    ->label('On Frontpage'),
                TernaryFilter::make('status')
                    ->label('Active'),
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
            'index' => Pages\ListOrganicProducts::route('/'),
            'create' => Pages\CreateOrganicProduct::route('/create'),
            'edit' => Pages\EditOrganicProduct::route('/{record}/edit'),
        ];
    }
}
