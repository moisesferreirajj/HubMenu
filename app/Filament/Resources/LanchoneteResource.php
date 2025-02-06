<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LanchoneteResource\Pages;
use App\Filament\Resources\LanchoneteResource\RelationManagers;
use App\Models\Lanchonete;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LanchoneteResource extends Resource
{
    protected static ?string $model = Lanchonete::class;

    protected static ?string $navigationIcon = 'ionicon-fast-food-outline';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('descricao')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('localidade')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('cep')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('cnpj')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telefone')
                    ->tel()
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('site')
                    ->maxLength(255),
                Forms\Components\TextInput::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('localidade')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cep')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cnpj')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefone')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('site')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status'),
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
            'index' => Pages\ListLanchonetes::route('/'),
            'create' => Pages\CreateLanchonete::route('/create'),
            'edit' => Pages\EditLanchonete::route('/{record}/edit'),
        ];
    }
}
