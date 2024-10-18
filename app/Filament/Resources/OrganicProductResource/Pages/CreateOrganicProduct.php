<?php

namespace App\Filament\Resources\OrganicProductResource\Pages;

use App\Filament\Resources\OrganicProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrganicProduct extends CreateRecord
{
    protected static string $resource = OrganicProductResource::class;
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
