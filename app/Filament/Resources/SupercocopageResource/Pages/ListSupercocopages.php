<?php

namespace App\Filament\Resources\SupercocopageResource\Pages;

use App\Filament\Resources\SupercocopageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSupercocopages extends ListRecords
{
    protected static string $resource = SupercocopageResource::class;

    protected ?string $heading = 'SUPERCOCO Page';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
