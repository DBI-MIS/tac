<?php

namespace App\Filament\Resources\JuvpageResource\Pages;

use App\Filament\Resources\JuvpageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJuvpage extends EditRecord
{
    protected static string $resource = JuvpageResource::class;


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
