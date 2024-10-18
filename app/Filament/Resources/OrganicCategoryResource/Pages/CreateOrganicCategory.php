<?php

namespace App\Filament\Resources\OrganicCategoryResource\Pages;

use App\Filament\Resources\OrganicCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrganicCategory extends CreateRecord
{
    protected static string $resource = OrganicCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
