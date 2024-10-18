<?php

namespace App\Filament\Resources\TacPageResource\Pages;

use App\Filament\Resources\TacPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTacPage extends EditRecord
{
    protected static string $resource = TacPageResource::class;

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
