<?php

namespace App\Filament\Resources\CocokingResource\Pages;

use App\Filament\Resources\CocokingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCocokings extends ListRecords
{
    protected static string $resource = CocokingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
