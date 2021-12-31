<?php

namespace App\Filament\Resources\ReserveResource\Pages;

use App\Filament\Resources\ReserveResource;
use App\Models\User;
use Filament\Resources\Pages\CreateRecord;

class CreateReserve extends CreateRecord
{
    protected static string $resource = ReserveResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}
