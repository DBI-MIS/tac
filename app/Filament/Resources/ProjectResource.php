<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Projects';

    public static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live()
                            ->afterStateUpdated(function (string $operation, $state, Set $set) {
                                $set('slug', Str::slug($state));
                            }),
                 Select::make('brand')
                    ->options([
                        'GRAD Projects' => 'GRAD Projects',
                        'TICA Projects' => 'TICA Projects',
                    ])
                    ->reactive()
                    ->afterStateUpdated(fn ($state, Set $set) => $set('category', null)), // Reset category when brand changes
                Select::make('category')
                    ->options(function (callable $get) {
                        $brand = $get('brand');

                        if ($brand === 'TICA Projects') {
                            return [
                                'Hospital' => 'Hospital',
                                'Pharmaceutical Factory' => 'Pharmaceutical Factory',
                                'Governments & Private' => 'Governments & Private',
                                'Hotel & Shopping Center' => 'Hotel & Shopping Center',
                                'Electronic Factory' => 'Electronic Factory',
                            ];
                        } elseif ($brand === 'GRAD Projects') {
                            return [
                                'Foreign Engineering' => 'Foreign Engineering',
                                'Domestic Engineering' => 'Domestic Engineering',
                            ];
                        }

                        return [];
                    })
                    ->reactive(),
                MarkdownEditor::make('description')
                ->toolbarButtons([
                    'blockquote',
                    'bulletList',
                    'orderedList',
                ])
                    ->columnSpanFull(),
             
                ])->columnSpan(3),
             
                Section::make()->schema([
                Toggle::make('featured')
                    ->required(),
                Toggle::make('status')
                    ->required(),
                FileUpload::make('project_img')
                    ->image()->directory('projects/photos')
                    ->nullable(),
                TextInput::make('slug')
                ->required()
                ->minLength(1)->unique(ignoreRecord: true)->maxLength(100),
                ])->columnSpan(2),
               
            ])->columns(5);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('project_img')
                    ->label('Project Image'),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('brand')
                    ->searchable() 
                     ->sortable(),
                    TextColumn::make('category')
                    ->searchable()  
                    ->sortable(),
                    ToggleColumn::make('featured'),
                    ToggleColumn::make('status')->label('Active'),
                
            ])->defaultSort('created_at', 'asc')
            ->defaultPaginationPageOption(50)
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
