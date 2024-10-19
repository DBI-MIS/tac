<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CocokingpageResource\Pages;
use App\Filament\Resources\CocokingpageResource\RelationManagers;
use App\Models\Cocokingpage;
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

class CocokingpageResource extends Resource
{
    protected static ?string $model = Cocokingpage::class;

    protected static ?string $navigationGroup = 'Pages';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = "Cocoking Page";

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
                        'contact' => 'Contact',
                        'features' => 'Features',
                        'choose_cocoking1' => 'choose cocoking1',
                        'choose_cocoking2' => 'choose cocoking2',
                        'choose_cocoking3' => 'choose cocoking3',
                        'choose_cocoking4' => 'choose cocoking4',
                        'choose_cocoking5' => 'choose cocoking5',
                        'choose_cocoking6' => 'choose cocoking6',
                        'cocoking_bottom' => 'cocoking_bottom',
                       
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
                        'choose_cocoking1' => 'choose cocoking1',
                        'choose_cocoking2' => 'choose cocoking2',
                        'choose_cocoking3' => 'choose cocoking3',
                        'choose_cocoking4' => 'choose cocoking4',
                        'choose_cocoking5' => 'choose cocoking5',
                        'choose_cocoking6' => 'choose cocoking6',
                        'cocoking_bottom' => 'cocoking_bottom',

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
            'index' => Pages\ListCocokingpages::route('/'),
            'create' => Pages\CreateCocokingpage::route('/create'),
            'edit' => Pages\EditCocokingpage::route('/{record}/edit'),
        ];
    }
}
