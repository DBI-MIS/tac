<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResponseResource\Pages;
use App\Filament\Resources\ResponseResource\RelationManagers;
use App\Models\Response;
use Carbon\Carbon;

use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use pxlrbt\FilamentExcel\Columns\Column;

class ResponseResource extends Resource
{
    protected static ?string $model = Response::class;

    protected static ?string $navigationIcon = 'heroicon-s-rectangle-group';
    public static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('product_id')
                ->relationship('product', 'title')
                ->searchable()
                ->required()
                ->preload()
                ->label(__('Product')),
                TextInput::make('full_name')
                ->required()
                ->label(__('Full Name'))
                ->live(onBlur:true)
                ->columnSpan(2)
                ->hint('  '),
                DatePicker::make('date_response')
                ->closeOnDateSelection()
                ->label(__('Date')),
                TextInput::make('contact_no')
                ->tel()
                ->maxLength(11)
                ->label(__('Contact Number')),
                TextInput::make('email_address')
                ->email()
                ->label(__('Email Address')),
                Textarea::make('message')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('review')
                    ->required(),
                TextInput::make('status')
                    ->required()
                    ->maxLength(255)
                    ->default('pending'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('product.title')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date_response')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('contact_no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_address')
                    ->searchable(),
                Tables\Columns\IconColumn::make('review')
                    ->boolean(),
                    SelectColumn::make('status')
                    ->options([
                        'pending' => 'pending',
                        'reviewed' => 'reviewed',
                    ])
                    ->afterStateUpdated(function($state, $record){
                        if($state === 'reviewed'){
                            $record->review = true;
                            $record->save();
                        }
                        else{
                            $record->review = false;
                            $record->save();
    
                        }
                    } )
            ])->defaultSort('date_response', 'desc')
            ->heading('Product Inquiry')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(), 
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    ExportBulkAction::make()->exports([
                        ExcelExport::make()
                        ->withFilename(date(Carbon::now()) . ' - Product Inquiry Responses')
                        ->withColumns([
                            Column::make('date_response')
                            ->heading('Date of Inquiry'),
                            Column::make('full_name')
                            ->heading('Name'),
                            Column::make('product.title')
                            ->heading('Product Inquired'),
                            Column::make('contact')
                            ->heading('Contact No.'),
                            Column::make('email_address')
                            ->heading('Email Address'),
                            Column::make('status')
                            ->heading('Status'),
                        ]),
                    ]),
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(), 
                    Tables\Actions\RestoreBulkAction::make(), 
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
            'index' => Pages\ListResponses::route('/'),
            'create' => Pages\CreateResponse::route('/create'),
            'view' => Pages\ViewResponse::route('/{record}'),
            'edit' => Pages\EditResponse::route('/{record}/edit'),
        ];
    }
}
