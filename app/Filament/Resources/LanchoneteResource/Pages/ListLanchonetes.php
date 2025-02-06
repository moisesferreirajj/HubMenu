<?php

namespace App\Filament\Resources\LanchoneteResource\Pages;

use App\Filament\Resources\LanchoneteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLanchonetes extends ListRecords
{
    protected static string $resource = LanchoneteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
