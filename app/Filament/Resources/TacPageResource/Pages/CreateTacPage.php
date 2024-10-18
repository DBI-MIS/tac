<?php

namespace App\Filament\Resources\TacPageResource\Pages;

use App\Filament\Resources\TacPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTacPage extends CreateRecord
{
    protected static string $resource = TacPageResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
