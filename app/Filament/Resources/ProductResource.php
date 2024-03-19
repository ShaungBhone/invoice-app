<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Actions\Action;
use App\Filament\Resources\ProductResource\Pages;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('number')
                                    ->default('NO-' . random_int(100000, 999999))
                                    ->disabled()
                                    ->dehydrated()
                                    ->required()
                                    ->maxLength(32)
                                    ->unique(Product::class, 'number', ignoreRecord: true),

                                Forms\Components\TextInput::make('remaining_stock')
                                    ->numeric()
                                    ->disabled()
                                    ->dehydrated()
                                    ->default(0)
                                    ->prefixActions([
                                        Action::make('addNewStock')
                                            ->icon('heroicon-m-plus')
                                            ->form([
                                                Forms\Components\TextInput::make('adding_stock')
                                                    ->label('Choose The Amount of Stock.')
                                                    ->minValue(0)
                                                    ->maxValue(100)
                                                    ->numeric()
                                                    ->rules(['regex:/^\d{1,6}(\.\d{0,2})?$/'])
                                            ])
                                            ->requiresConfirmation()
                                            ->modalIcon('heroicon-m-plus')
                                            ->action(function (
                                                Set $set,
                                                Get $get,
                                                array $data
                                            ): void {
                                                $addingStock = $data['adding_stock'];
                                                $remainingStock = $get('remaining_stock');
                                                $totalStock = $remainingStock + $addingStock;
                                                $set('remaining_stock', $totalStock);
                                            }),
                                    ])
                            ])
                            ->columns(2),
                    ])
                    ->columnSpan(['lg' => 2]),

                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Placeholder::make('created_at')
                            ->label(__('Created'))
                            ->content(fn (Product $record): ?string => $record->created_at?->diffForHumans()),

                        Forms\Components\Placeholder::make('updated_at')
                            ->label(__('Last Modified'))
                            ->content(fn (Product $record): ?string => $record->updated_at?->diffForHumans()),
                    ])
                    ->columnSpan(['lg' => 1])
                    ->hidden(fn (?Product $record) => $record === null),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('remaining_stock')
                    ->sortable()
                    ->color(fn ($record) => $record->remaining_stock > 5 ? 'primary' : 'danger')
                    ->label('Stock')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
