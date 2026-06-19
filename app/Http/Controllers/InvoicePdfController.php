<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class InvoicePdfController extends Controller
{
    public function __invoke(Invoice $invoice)
    {
        // Cargamos las relaciones para no tener problemas en la vista
        $invoice->load(['customer', 'supplier']);

        // Generamos el PDF apuntando a una vista que crearemos ahora
        $pdf = Pdf::loadView('pdf.invoice', [
            'invoice' => $invoice
        ]);

        // Retornamos el archivo para que se abra en el navegador (stream) 
        // o se descargue directamente (download). Para demos, 'stream' es mejor.
        return $pdf->stream('factura-' . $invoice->number . '.pdf');
    }
}