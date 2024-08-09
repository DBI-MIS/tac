<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->required()
                ->label('Name'),
                Select::make('subject')
                    ->options([
                        'General Inquiry' => 'General Inquiry',
                        'Product Inquiry' => 'Product Inquiry',
                        'Concern/Issue' => 'Concern/Issue',
                        'Careers/Hiring' => 'Careers/Hiring',
                        'Feedback' => 'Feedback',
                    ])
                    ->required()
                    ->label('Subject'),
                TextInput::make('contact_no')
                    ->required()
                    ->tel()  
                    ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/')
                    ->label('Contact Number'),
                TextInput::make('email')
                    ->required()
                    ->email()
                    ->label('Email'),
                Textarea::make('message')
                    ->label('Message or Feedback'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->label('Name'),
                TextColumn::make('subject')
                    ->label('Purpose')
                    ->sortable(),
                TextColumn::make('contact_no')
                    ->label('Contact No.')
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->sortable(),
                TextColumn::make('message')
                    ->label('Message')
                    ->sortable(),
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
