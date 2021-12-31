<?php

namespace App\Filament\Resources\ResponsibleResource\Pages;

use App\Filament\Resources\ResponsibleResource;
use App\Models\User;
use Filament\Resources\Pages\CreateRecord;

class CreateResponsible extends CreateRecord
{
    protected static string $resource = ResponsibleResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {

        $user = User::create($data['user']);
        unset($data['user']);
        $data['user_id'] = $user->id;

        dd($data);

        return $data;
    }


}
