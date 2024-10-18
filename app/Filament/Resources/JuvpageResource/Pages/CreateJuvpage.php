<?php

namespace App\Filament\Resources\JuvpageResource\Pages;

use App\Filament\Resources\JuvpageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateJuvpage extends CreateRecord
{
    protected static string $resource = JuvpageResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
