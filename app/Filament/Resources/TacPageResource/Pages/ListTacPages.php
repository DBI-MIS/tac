<?php

namespace App\Filament\Resources\TacPageResource\Pages;

use App\Filament\Resources\TacPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTacPages extends ListRecords
{
    protected static string $resource = TacPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
