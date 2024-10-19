<?php

namespace App\Filament\Resources\SupercocopageResource\Pages;

use App\Filament\Resources\SupercocopageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSupercocopage extends CreateRecord
{
    protected static string $resource = SupercocopageResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
