<?php

namespace App\Filament\Resources\NewsarticleResource\Pages;

use App\Filament\Resources\NewsarticleResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewNewsarticle extends ViewRecord
{
    protected static string $resource = NewsarticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
