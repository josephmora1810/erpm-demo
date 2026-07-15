<?php

use App\Http\Controllers\InvoicePdfController;
use App\Http\Controllers\FilesPdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/admin');
});

Route::get('/invoices/{invoice}/pdf', InvoicePdfController::class)->name('invoice.pdf');


Route::get('/pdf/comprobante-retencion-iva/{invoice}', [FilesPdfController::class, 'comprobanteRetencionIva'])
    ->name('pdf.retencion-iva');
Route::get('/pdf/acta-control-perceptivo/{invoice}', [FilesPdfController::class, 'actaControlPerceptivo'])->name('acta.control.perceptivo');
Route::get('/pdf/finiquito-contable/{invoice}', [FilesPdfController::class, 'finiquitoContable'])->name('finiquito.contable');
Route::get('/pdf/orden-compra/{supplier}', [FilesPdfController::class, 'ordenCompra'])->name('orden.compra.pdf');
Route::get('/pdf/orden-pago/{invoice}', [FilesPdfController::class, 'ordenPago'])->name('orden.pago.pdf');
Route::get('/pdf/requisicion/{product}', [FilesPdfController::class, 'requisicion'])->name('requisicion.pdf');
