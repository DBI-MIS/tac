<?php

namespace App\Filament\Resources\CocokingResource\Pages;

use App\Filament\Resources\CocokingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCocoking extends EditRecord
{
    protected static string $resource = CocokingResource::class;

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
