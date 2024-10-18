<?php

namespace App\Filament\Resources\CocokingResource\Pages;

use App\Filament\Resources\CocokingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCocoking extends CreateRecord
{
    protected static string $resource = CocokingResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
