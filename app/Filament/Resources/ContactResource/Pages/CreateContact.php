<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use App\Mail\ContactMail;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Mail;

class CreateContact extends CreateRecord
{
    protected static string $resource = ContactResource::class;

    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
    //  
    //   return $data;

    //   $data = $contact
    //  }
    // protected function afterCreate(): void
    // {
    //     $contact = $this->getMountedTableActionRecord();
    //     Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($contact));
    // //    Mail::to('angelojt2024@gmail.com')->send(new ContactMail($contact));
    //     // Runs after the form fields are saved to the database.
    // }
}
