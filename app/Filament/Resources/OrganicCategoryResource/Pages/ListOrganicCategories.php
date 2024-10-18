<?php

namespace App\Filament\Resources\OrganicCategoryResource\Pages;

use App\Filament\Resources\OrganicCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrganicCategories extends ListRecords
{
    protected static string $resource = OrganicCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
