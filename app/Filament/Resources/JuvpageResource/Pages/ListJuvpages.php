<?php

namespace App\Filament\Resources\JuvpageResource\Pages;

use App\Filament\Resources\JuvpageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJuvpages extends ListRecords
{
    protected static string $resource = JuvpageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
