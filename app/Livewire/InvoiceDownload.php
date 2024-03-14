<?php

namespace App\Livewire;

use App\Models\Invoice;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Attributes\Layout;

#[Layout('layouts.guest')]
class InvoiceDownload extends Component
{
    public $invoices;

    public function mount()
    {
        $this->invoices = Invoice::all();
    }

    public function download()
    {
        $data = [
            'invoices' => $this->invoices
        ];

        $pdf = Pdf::loadView('invoice-download', $data);

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, 'invoice.pdf');
    }

    public function render()
    {
        return view('livewire.invoice-download');
    }
}
