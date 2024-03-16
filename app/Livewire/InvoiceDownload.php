<?php

namespace App\Livewire;

use App\Models\Invoice;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Spatie\LaravelPdf\Facades\Pdf;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Storage;

#[Layout('layouts.guest')]
class InvoiceDownload extends Component
{
    public Invoice $invoice;

    public function render()
    {
        return view('livewire.invoice-download', [
            'invoice' => $this->invoice,
        ]);
    }
}
