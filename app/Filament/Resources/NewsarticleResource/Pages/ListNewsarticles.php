<?php

namespace App\Filament\Resources\NewsarticleResource\Pages;

use App\Filament\Resources\NewsarticleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNewsarticles extends ListRecords
{
    protected static string $resource = NewsarticleResource::class;

    protected ?string $heading = 'News Articles';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
