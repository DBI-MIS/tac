<?php

namespace App\Filament\Resources\OrganicProductResource\Pages;

use App\Filament\Resources\OrganicProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrganicProducts extends ListRecords
{
    protected static string $resource = OrganicProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
