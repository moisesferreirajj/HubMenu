<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PedidosResource\Pages;
use App\Filament\Resources\PedidosResource\RelationManagers;
use App\Models\Pedidos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PedidosResource extends Resource
{
    protected static ?string $model = Pedidos::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-magnifying-glass';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('lanchonete_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('reference')
                    ->maxLength(255),
                Forms\Components\TextInput::make('payment_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('status'),
                Forms\Components\TextInput::make('total_value')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('lanchonete_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('reference')
                    ->searchable(),
                Tables\Columns\TextColumn::make('payment_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('total_value')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPedidos::route('/'),
            'create' => Pages\CreatePedidos::route('/create'),
            'edit' => Pages\EditPedidos::route('/{record}/edit'),
        ];
    }
}
