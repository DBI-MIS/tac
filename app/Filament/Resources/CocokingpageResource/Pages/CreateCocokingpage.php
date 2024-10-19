<?php

namespace App\Filament\Resources\CocokingpageResource\Pages;

use App\Filament\Resources\CocokingpageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCocokingpage extends CreateRecord
{
    protected static string $resource = CocokingpageResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
