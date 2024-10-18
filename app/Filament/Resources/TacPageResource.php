<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TacPageResource\Pages;
use App\Filament\Resources\TacPageResource\RelationManagers;
use App\Models\TacPage;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
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

class TacPageResource extends Resource
{
    protected static ?string $model = TacPage::class;
    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make()->schema([
                    TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                    MarkdownEditor::make('description1')
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'heading',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'table',
                        'undo',
                    ]),
                    MarkdownEditor::make('description2')
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'heading',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'table',
                        'undo',
                    ]),
                ])->columnSpan(3),

                Section::make()->schema([
                    Select::make('section')
                    ->options([
                        'headline' => 'Headline',
                        'body' => 'Body',
                        'subheadline' => 'Subheadline',
                        'introduction' => 'Introduction',
                        'testimonials' => 'Testimonials',
                        'contact' => 'Contact',
                        'features' => 'Features',
                        'supercoco' => 'Supercoco',
                        'product_range1' => 'product range1',
                        'product_range2' => 'product_range2',
                        'product_range3' => 'product range3',
                        'product_range4' => 'product_range4',
                        'product_range5' => 'product_range5',
                        'choose_supercoco1' => 'choose supercoco1',
                        'choose_supercoco2' => 'choose supercoco2',
                        'choose_supercoco3' => 'choose supercoco3',
                        'choose_supercoco4' => 'choose supercoco4',
                        'choose_supercoco5' => 'choose supercoco5',
                        'supercoco_bottom' => 'supercoco_bottom',
                        'testimonial1' => 'testimonial1',
                        'testimonial2' => 'testimonial2',
                        'testimonial3' => 'testimonial3',
                       
                    ]),
                    FileUpload::make('img_page')
                    ->image()->directory('pages/tac')
                    ->nullable(),

                ])->columnSpan(2),
               
               
            ])->columns(5);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                ImageColumn::make('img_page')
                    ->searchable(),
                SelectColumn::make('section')
                    ->options([
                        'headline' => 'Headline',
                        'body' => 'Body',
                        'subheadline' => 'Subheadline',
                        'introduction' => 'Introduction',
                        'testimonials' => 'Testimonials',
                        'contact' => 'Contact',
                        'features' => 'Features',
                        'supercoco' => 'Supercoco',
                        'product_range1' => 'product range1',
                        'product_range2' => 'product_range2',
                        'product_range3' => 'product range3',
                        'product_range4' => 'product_range4',
                        'product_range5' => 'product_range5',
                        'choose_supercoco1' => 'choose supercoco1',
                        'choose_supercoco2' => 'choose supercoco2',
                        'choose_supercoco3' => 'choose supercoco3',
                        'choose_supercoco4' => 'choose supercoco4',
                        'choose_supercoco5' => 'choose supercoco5',
                        'supercoco_bottom' => 'supercoco_bottom',
                        'testimonial1' => 'testimonial1',
                        'testimonial2' => 'testimonial2',
                        'testimonial3' => 'testimonial3',

                    ]),
                TextColumn::make('created_at')
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
            'index' => Pages\ListTacPages::route('/'),
            'create' => Pages\CreateTacPage::route('/create'),
            'edit' => Pages\EditTacPage::route('/{record}/edit'),
        ];
    }
}
