<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeEdit(array $data): array
    {
        if (isset($data['updated_at']) && !empty($data['updated_at'])) {
            $data['updated_at'] = Carbon::parse($data['updated_at']);
        }

        //HASH LARAVEL - BY MOISES J. FERREIRA
        if (isset($data['password']) && !empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        return $data;
    }
}
