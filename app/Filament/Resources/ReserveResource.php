<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReserveResource\Pages;
use App\Filament\Resources\ReserveResource\RelationManagers;
use App\Models\Reserve;
use Filament\Forms;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;

class ReserveResource extends Resource
{
    protected static ?string $model = Reserve::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                BelongsToSelect::make('laboratory_id')
                    ->relationship('laboratory', 'name', fn (Builder $query) => $query->where('available', 1))
                    ->rule('')
                    ->required(),
                BelongsToSelect::make('lesson_id')
                    ->relationship('lesson', 'class')
                    ->required(),
                Forms\Components\DateTimePicker::make('start')
                    ->required(),
                Forms\Components\DateTimePicker::make('end')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('laboratory.name'),
                Tables\Columns\TextColumn::make('lesson.class'),
                Tables\Columns\TextColumn::make('start')
                    ->dateTime('d-M-Y h:m'),
                Tables\Columns\TextColumn::make('end')
                    ->dateTime('d-M-Y h:i'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListReserves::route('/'),
            'create' => Pages\CreateReserve::route('/create'),
            'edit' => Pages\EditReserve::route('/{record}/edit'),
        ];
    }
}
