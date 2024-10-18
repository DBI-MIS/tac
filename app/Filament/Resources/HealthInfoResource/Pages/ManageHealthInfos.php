<?php

namespace App\Filament\Resources\HealthInfoResource\Pages;

use App\Filament\Resources\HealthInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Filament\Support\Enums\MaxWidth;

class ManageHealthInfos extends ManageRecords
{
    protected static string $resource = HealthInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->slideOver()
            ->closeModalByClickingAway(false)
            ->modalWidth(MaxWidth::FiveExtraLarge),
        ];
    }
}
