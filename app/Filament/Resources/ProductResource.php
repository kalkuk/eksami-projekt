<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form {
        return $form
            ->columns(3)
            ->schema([
                Forms\Components\Toggle::make('popular')
                    ->columnSpan('full'),
                Forms\Components\TextInput::make('name')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->columnSpan('full'),

                Forms\Components\TextInput::make('price')
                    ->columnSpan(1)
                    ->numeric(),
                Forms\Components\Placeholder::make('')
                    ->columnSpan(2),
                Forms\Components\CheckboxList::make('sizes')
                    ->options([
                        'XS' => 'XS',
                        'S' => 'S',
                        'M' => 'M',
                        'L' => 'L',
                        'XL' => 'XL',
                        'XXL' => 'XXL',
                    ]),
                Forms\Components\CheckboxList::make('colors')
                    ->options([
                        'red' => 'Red',
                        'green' => 'Green',
                        'blue' => 'Blue',
                        'white' => 'White',
                        'black' => 'Black',
                    ]),
                Forms\Components\Radio::make('category')
                    ->options([
                        'hoodies' => 'Hoodies',
                        'tshirts' => 'T-Shirts',
                        'other' => 'Other',
                    ])
                    ->required(),
                FileUpload::make('images')
                    ->columnSpan('full')
                    ->disk('assets')
                    ->directory('shop')
                    ->required()
                    ->multiple()
                    ->minFiles(1)
                    ->maxFiles(5),
            ]);
    }

    public static function table(Table $table): Table {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\ImageColumn::make('images')
                    ->disk('assets'),
                Tables\Columns\TextColumn::make('sizes'),
                Tables\Columns\TextColumn::make('colors'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\ToggleColumn::make('popular'),
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
            ])
            ->reorderable('order')
            ->defaultSort('order')
            ;
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
