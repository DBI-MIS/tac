<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Pages';

    public static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                FileUpload::make('img')
                    ->directory('pages/photos')
                    ->image()
                    ->downloadable(),
                Select::make('section')
                ->options([
                    'hero' => 'hero',
                    'global_brand' => 'global_brand',
                    'certification' => 'certification',
                    'dealership' => 'dealership',
                    'about_page_title' => 'about_page_title',
                    'about_page_mission' => 'about_page_mission',
                    'about_page_vision' => 'about_page_vision',
                    'about_page_office' => 'about_page_office',
                    'about_page_showroom' => 'about_page_showroom',
                    'about_page_singapore' => 'about_page_singapore',
                    'filler_page_vco' => 'filler_page_vco',
                    'filler_page_video' => 'filler_page_video',
                    'filler_page_factory' => 'filler_page_factory',
                ]),
                MarkdownEditor::make('desc1'),
                MarkdownEditor::make('desc2'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultPaginationPageOption(25)
            ->columns([
                ImageColumn::make('img')
                    ->wrap()
                    ->label('Image'),
                TextColumn::make('title')
                    ->searchable(),
                SelectColumn::make('section')
                ->options([
                    'hero' => 'hero',
                    'global_brand' => 'global_brand',
                    'certification' => 'certification',
                    'dealership' => 'dealership',
                    'about_page_title' => 'about_page_title',
                    'about_page_mission' => 'about_page_mission',
                    'about_page_vision' => 'about_page_vision',
                    'about_page_office' => 'about_page_office',
                    'about_page_showroom' => 'about_page_showroom',
                    'about_page_singapore' => 'about_page_singapore',
                    'about_page_shanghai' => 'about_page_shanghai',
                    'filler_page_vco' => 'filler_page_vco',
                    'filler_page_video' => 'filler_page_video',
                    'filler_page_factory' => 'filler_page_factory',
                ]),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
