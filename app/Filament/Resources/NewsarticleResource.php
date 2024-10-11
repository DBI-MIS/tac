<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsarticleResource\Pages;
use App\Filament\Resources\NewsarticleResource\RelationManagers;
use App\Models\Newsarticle;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Set;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsarticleResource extends Resource
{
    protected static ?string $model = Newsarticle::class;

    protected static ?string $navigationIcon = 'heroicon-s-newspaper';
    protected static ?string $navigationLabel = "News Articles";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make()->schema([

                    TextInput::make('title')
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                    TextInput::make('category')
                        ->required()
                        ->maxLength(255),
                        MarkdownEditor::make('description')
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
                        ])
                        ,
                ])->columnSpan(3),

                Section::make()->schema([
                    
                    Toggle::make('is_featured')
                        ->required(),
                    FileUpload::make('img')
                        ->image()->directory('newsarticles/')
                        ->nullable(),
                    DatePicker::make('published_at')
                        ->timezone('Asia/Manila')
                        ->required()
                        ->default(Carbon::today()),
                    TextInput::make('slug')
                        ->required()
                        ->maxLength(255),

                ])->columnSpan(2),
               
                
            ])->columns(5);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('category')
                    ->searchable(),
                ImageColumn::make('img')
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable(),
                IconColumn::make('is_featured')
                    ->boolean(),
                TextColumn::make('published_at')
                    ->date()
                    ->sortable(),
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListNewsarticles::route('/'),
            'create' => Pages\CreateNewsarticle::route('/create'),
            'view' => Pages\ViewNewsarticle::route('/{record}'),
            'edit' => Pages\EditNewsarticle::route('/{record}/edit'),
        ];
    }
}
