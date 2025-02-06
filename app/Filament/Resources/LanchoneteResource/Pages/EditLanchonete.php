<?php

namespace App\Filament\Resources\LanchoneteResource\Pages;

use App\Filament\Resources\LanchoneteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLanchonete extends EditRecord
{
    protected static string $resource = LanchoneteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
