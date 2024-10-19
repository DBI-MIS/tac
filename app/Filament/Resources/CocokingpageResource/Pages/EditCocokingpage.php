<?php

namespace App\Filament\Resources\CocokingpageResource\Pages;

use App\Filament\Resources\CocokingpageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCocokingpage extends EditRecord
{
    protected static string $resource = CocokingpageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
