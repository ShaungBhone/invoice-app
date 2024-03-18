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
                        Infolists\Components\TextEntry::make('number'),
                        Infolists\Components\TextEntry::make('invoice_date'),
                        Infolists\Components\TextEntry::make('customer.name'),
                        Infolists\Components\TextEntry::make('status'),
                        Infolists\Components\TextEntry::make('items.product.name')
                            ->label('Product'),
                        Infolists\Components\TextEntry::make('items.qty')
                            ->label('Quantity'),
                        Infolists\Components\TextEntry::make('items.unit_price')
                            ->label('Unit Price'),
                    ])->columns(2)
            ]);
    }
}
