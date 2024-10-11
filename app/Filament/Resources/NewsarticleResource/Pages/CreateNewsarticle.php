<?php

namespace App\Filament\Resources\NewsarticleResource\Pages;

use App\Filament\Resources\NewsarticleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsarticle extends CreateRecord
{
    protected static string $resource = NewsarticleResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
