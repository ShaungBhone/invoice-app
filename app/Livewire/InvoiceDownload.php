<?php

namespace App\Livewire;

use App\Models\Invoice;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Spatie\Browsershot\Browsershot;

#[Layout('layouts.guest')]
class InvoiceDownload extends Component
{
    public function render()
    {
        $html = view('livewire.invoice-download', [
            'invoices' => Invoice::with(['items', 'customer'])->get(),
        ])->render();

        return 'Done';
    }
}
