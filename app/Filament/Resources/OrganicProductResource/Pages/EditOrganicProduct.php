<?php

namespace App\Filament\Resources\OrganicProductResource\Pages;

use App\Filament\Resources\OrganicProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrganicProduct extends EditRecord
{
    protected static string $resource = OrganicProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
