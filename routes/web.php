<?php

use App\Http\Middleware\StatusCheck;
use App\Livewire\InvoiceDownload;
use Illuminate\Support\Facades\Route;

Route::get('/invoice/{invoice}', InvoiceDownload::class)->name('invoice-download')
    ->middleware([
        'auth',
        StatusCheck::class
    ]);

Route::any('{query}', fn () => redirect('/admin'))->where('query', '.*');
Route::get('/login', fn () => redirect('/admin'))->name('login');
