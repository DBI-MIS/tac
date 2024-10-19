<?php

namespace App\Filament\Resources\SupercocopageResource\Pages;

use App\Filament\Resources\SupercocopageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSupercocopage extends EditRecord
{
    protected static string $resource = SupercocopageResource::class;

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
