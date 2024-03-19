<?php

namespace App\Filament\Resources\InvoiceResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\InvoiceResource;
use Filament\Infolists;
use Filament\Infolists\Infolist;

class ViewInvoice extends ViewRecord
{
    protected static string $resource = InvoiceResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make()
                    ->schema([
                        Infolists\Components\Group::make()
                            ->schema([
                                Infolists\Components\TextEntry::make('number'),
                                Infolists\Components\TextEntry::make('invoice_date'),
                                Infolists\Components\TextEntry::make('customer.name'),
                                Infolists\Components\TextEntry::make('status'),
                            ])->columns(2),
                        Infolists\Components\RepeatableEntry::make('items')
                            ->schema([
                                Infolists\Components\TextEntry::make('product.name'),
                                Infolists\Components\TextEntry::make('qty'),
                                Infolists\Components\TextEntry::make('unit_price')
                                    ->columnSpan(2),
                            ])
                            ->grid(2),
                    ])->columnSpan(2)
            ])->columns(3);
    }
}
