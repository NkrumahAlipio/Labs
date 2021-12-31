<?php

namespace App\Filament\Resources\SupervisorResource\Pages;

use App\Filament\Resources\SupervisorResource;
use App\Models\User;
use Filament\Resources\Pages\CreateRecord;

class CreateSupervisor extends CreateRecord
{
    protected static string $resource = SupervisorResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $user = User::create($data['user']);
        unset($data['user']);
        $data['user_id'] = $user->id;

        return $data;
    }

}
