<?php

namespace App\Filament\Resources\OrganicCategoryResource\Pages;

use App\Filament\Resources\OrganicCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrganicCategory extends EditRecord
{
    protected static string $resource = OrganicCategoryResource::class;

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
