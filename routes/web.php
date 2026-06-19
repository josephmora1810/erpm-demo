<?php

use App\Http\Controllers\InvoicePdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/admin');
});

Route::get('/invoices/{invoice}/pdf', InvoicePdfController::class)->name('invoice.pdf');
