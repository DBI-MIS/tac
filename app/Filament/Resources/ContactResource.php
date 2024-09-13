<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Mail\ContactMail;
use App\Models\Contact;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Mail;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Columns\Column;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'bxs-contact';

    public static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}

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
            // ->afterCreate(function (Contact $contact) {
            //     Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($contact));
            //  });
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
               IconColumn::make('review')
                    ->label('Review')
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
            ])->heading('Contact Inquiry')
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
                            // Column::make('date_response')
                            // ->heading('Date of Inquiry'),
                            Column::make('name')
                            ->heading('Name'),
                            Column::make('subject')
                            ->heading('Purpose'),
                            Column::make('contact_no')
                            ->heading('Contact No.'),
                            Column::make('email')
                            ->heading('Email'),
                            Column::make('message')
                            ->heading('Message'),
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
            'view' => Pages\ViewContacts::route('/{record}'),
        ];
    }
}
