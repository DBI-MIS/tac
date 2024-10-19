<?php

namespace App\Filament\Resources\CocokingpageResource\Pages;

use App\Filament\Resources\CocokingpageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCocokingpages extends ListRecords
{
    protected static string $resource = CocokingpageResource::class;

    protected ?string $heading = 'COCOKING Page';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
