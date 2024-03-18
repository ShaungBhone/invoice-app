<?php

namespace App\Filament\Resources\InvoiceResource\Pages;

use App\Models\Product;
use App\Enums\OrderStatus;
use Filament\Notifications\Notification;
use Filament\Notifications\Actions\Action;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\InvoiceResource;

class CreateInvoice extends CreateRecord
{
    protected static string $resource = InvoiceResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function beforeCreate(): void
    {
        if (Product::where('remaining_stock', '>=', 1)) {
            Notification::make()
                ->warning()
                ->title('You don\'t have an enough product quantity!')
                ->body('Please create to continue.')
                ->persistent()
                ->actions([
                    Action::make('create')
                        ->button()
                        ->url(route('filament.admin.resources.products.create'), shouldOpenInNewTab: true),
                ])
                ->send();

            $this->halt();
        }
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
