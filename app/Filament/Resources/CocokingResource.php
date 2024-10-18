<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CocokingResource\Pages;
use App\Filament\Resources\CocokingResource\RelationManagers;
use App\Models\Cocoking;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
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

class CocokingResource extends Resource
{
    protected static ?string $model = Cocoking::class;

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
                        'choose_cocoking1' => 'choose cocoking1',
                        'choose_cocoking2' => 'choose cocoking2',
                        'choose_cocoking3' => 'choose cocoking3',
                        'choose_cocoking4' => 'choose cocoking4',
                        'choose_cocoking5' => 'choose cocoking5',
                        'choose_cocoking6' => 'choose cocoking6',
                        'cocoking_bottom' => 'cocoking_bottom',
                        'testimonials' => 'testimonials',
                        'testimonial2' => 'testimonial2',
                        'testimonial3' => 'testimonial3',
                        'testimonial4' => 'testimonial4',
                        'testimonial5' => 'testimonial5',
                        'testimonial6' => 'testimonial6',
                       
                    ]),
                    FileUpload::make('img_page')
                    ->image()->directory('pages/tac')
                    ->nullable(),
                    TextInput::make('order')
                    ->numeric()
                    ->required()
                    ->default(0),

                ])->columnSpan(2),
               
               
            ])->columns(5);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order')
                ->sortable(),
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
                        'contact' => 'Contact',
                        'features' => 'Features',
                        'supercoco' => 'Supercoco',
                        'product_range1' => 'product range1',
                        'product_range2' => 'product_range2',
                        'product_range3' => 'product range3',
                        'product_range4' => 'product_range4',
                        'product_range5' => 'product_range5',
                        'choose_cocoking1' => 'choose cocoking1',
                        'choose_cocoking2' => 'choose cocoking2',
                        'choose_cocoking3' => 'choose cocoking3',
                        'choose_cocoking4' => 'choose cocoking4',
                        'choose_cocoking5' => 'choose cocoking5',
                        'choose_cocoking6' => 'choose cocoking6',
                        'cocoking_bottom' => 'cocoking_bottom',
                        'testimonials' => 'testimonials',
                        'testimonial2' => 'testimonial2',
                        'testimonial3' => 'testimonial3',
                        'testimonial4' => 'testimonial4',
                        'testimonial5' => 'testimonial5',
                        'testimonial6' => 'testimonial6',

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
            'index' => Pages\ListCocokings::route('/'),
            'create' => Pages\CreateCocoking::route('/create'),
            'edit' => Pages\EditCocoking::route('/{record}/edit'),
        ];
    }
}
