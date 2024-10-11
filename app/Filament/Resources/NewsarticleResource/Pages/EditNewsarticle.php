<?php

namespace App\Filament\Resources\NewsarticleResource\Pages;

use App\Filament\Resources\NewsarticleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsarticle extends EditRecord
{
    protected static string $resource = NewsarticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
