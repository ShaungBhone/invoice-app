<?php

namespace App\Filament\Resources\InvoiceResource\Pages;

use Filament\Actions;
use App\Enums\OrderStatus;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\InvoiceResource;

class EditInvoice extends EditRecord
{
    protected static string $resource = InvoiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        if ($this->record->status == OrderStatus::Delivered) {
            $this->record->items->each(function ($item) {
                $newStock = $item->product->remaining_stock - $item->qty;
                $item->product->update(['remaining_stock' => $newStock]);
            });
        }
    }
}
