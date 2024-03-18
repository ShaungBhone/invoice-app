<?php

namespace App\Filament\Resources\InvoiceResource\Pages;

use App\Enums\OrderStatus;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\InvoiceResource;

class CreateInvoice extends CreateRecord
{
    protected static string $resource = InvoiceResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function afterCreate()
    {
        if ($this->record->status == OrderStatus::Delivered) {
            $this->record->items->each(function ($item) {
                $newStock = $item->product->remaining_stock - $item->qty;
                $item->product->update(['remaining_stock' => $newStock]);
            });
        }
    }
}
