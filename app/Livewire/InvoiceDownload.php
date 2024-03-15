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
    public $invoices;

    public function mount()
    {
        $this->invoices = Invoice::all();
    }

    public function download()
    {
        $html = view('invoice-download', [
            'invoices' => $this->invoices
        ])->render();

        $fileName = 'example.pdf';
        $filePath = storage_path('app/public/' . $fileName);

        Browsershot::html($html)
            ->setNodeBinary('/usr/bin/node')
            ->setNpmBinary('/usr/bin/npm')
            ->save($filePath);

        Storage::disk('public')->put($fileName, file_get_contents($filePath));

        return 'done';
    }

    public function render()
    {
        return view('livewire.invoice-download');
    }
}
