<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

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
                        ]),

                        RichEditor::make('technical_specs')
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
                        ->columnSpanFull(),


                    ]
                )->columnSpan(2),

                // Next /

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

                        Select::make('categories')
                        ->multiple()
                        ->options([
                            'Chiller' => 'Chiller',
                            'Air-Side Unit' => 'Air-Side Unit',
                            'Commercial' => 'Commercial',
                            'VRF' => 'VRF',
                            'Low-Temperature Freezing' => 'Low-Temperature Freezing',
                            'Thermal Products' => 'Thermal Products',
                            'Data Center Products' => 'Data Center Products',
                            'Highlanders Brown Rice Tea' => 'Highlanders Brown Rice Tea',
                            'COCOKING Virgin Coconut Oil' => 'COCOKING Virgin Coconut Oil',
                            'LED Products' => 'LED Products',
                            'TRUWATER Cooling Platforms' => 'TRUWATER Cooling Platforms',
                            'GRAD' => 'GRAD',
                            'Other Products' => 'Other Products',

                        ])
                        // ->relationship('product_categories', 'title')
                        ->searchable()
                        ->preload()
                        ->label(__('Product Categories'))
                        ->helperText('Choose the feature first & inlcude atleast 1 section name: Airconditioning,
                    Refrigeration, Ventilation, Cooling Tower.. etc.'),

                    Select::make('productcategories')
                        ->multiple()
                        ->relationship('productcategories', 'title')
                        ->searchable()
                        ->preload()
                        ->label(__('Categories')),

                    TextInput::make('slug')
                        ->required()
                        ->minLength(1)->unique(ignoreRecord: true)->maxLength(150),

                    Select::make('user_id')
                    // ->relationship('writer', 'name')
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
                    ->label('Category')->badge()
                    ->searchable(),
                TextColumn::make('user_id')
                    ->label('Created by')
                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                    ToggleColumn::make('status')->label('Active'),
                    ToggleColumn::make('featured'),
                    
                
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
