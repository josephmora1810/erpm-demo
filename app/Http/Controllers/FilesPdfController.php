<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Supplier;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilesPdfController extends Controller{
    public function comprobanteRetencionIva(Invoice $invoice)
    {
        // Asegurar que la factura tenga un proveedor (para compras)


        $pdf = Pdf::loadView('pdf.comprobante-retencion-iva', [
            'invoice' => $invoice
        ]);

        return $pdf->stream('comprobante-retencion-iva-' . $invoice->number . '.pdf');
    }

    public function actaControlPerceptivo(Invoice $invoice)
    {
        $invoice->load('supplier');

        // Datos mock de items (puedes reemplazar con relaciones reales si existen)
        $items = [
            (object) [
                'item' => '01',
                'descripcion' => 'Computadora Portátil, Procesador i7, 16GB RAM, SSD 512GB',
                'cant_facturada' => 10,
                'cant_recibida' => 10,
                'cumple_cant' => 'S',
                'cumple_espec' => 'S',
                'estado' => 'B',
                'observaciones' => 'Completo y operativo.',
            ],
            (object) [
                'item' => '02',
                'descripcion' => 'Monitor 24" Full HD',
                'cant_facturada' => 5,
                'cant_recibida' => 5,
                'cumple_cant' => 'S',
                'cumple_espec' => 'S',
                'estado' => 'B',
                'observaciones' => 'Sin novedad.',
            ],
        ];

        $data = [
            'numero_acta' => 'CP-2026-' . str_pad($invoice->id, 6, '0', STR_PAD_LEFT),
            'fecha' => now()->format('d / m / Y'),
            'proveedor' => $invoice->supplier,
            'items' => $items,
        ];

        $pdf = Pdf::loadView('pdf.acta-control-perceptivo', $data);
        return $pdf->stream('acta-control-perceptivo-' . $invoice->number . '.pdf');
    }

    public function finiquitoContable(Invoice $invoice)
    {
        $invoice->load('supplier');

        // Obtener todas las facturas del mismo proveedor (si las hay)
        $facturas = Invoice::where('supplier_id', $invoice->supplier_id)->get();

        // Si no hay más facturas, usamos solo la actual
        if ($facturas->isEmpty()) {
            $facturas = collect([$invoice]);
        }

        // Calcular totales
        $monto_total = $facturas->sum('total');
        $total_retencion_iva = $facturas->sum('retencion_iva') ?? 0;
        $total_retencion_islr = $facturas->sum('retencion_islr') ?? 0;
        $total_neto = $facturas->sum(function($f) { return $f->total - ($f->retencion_iva ?? 0) - ($f->retencion_islr ?? 0); });
        $total_pagado = $facturas->sum(function($f) { return $f->monto_pagado ?? $f->total; });
        $total_saldo = $total_neto - $total_pagado;

        $data = [
            'finiquito_numero' => 'FC-2026-' . str_pad($invoice->id, 6, '0', STR_PAD_LEFT),
            'fecha_emision' => now()->format('d / m / Y'),
            'contrato_ref' => 'CONTRATO-' . $invoice->id,
            'proveedor' => $invoice->supplier,
            'objeto' => 'Adquisición y ejecución de bienes según factura ' . $invoice->number,
            'monto_total' => $monto_total,
            'facturas' => $facturas,
            'total_retencion_iva' => $total_retencion_iva,
            'total_retencion_islr' => $total_retencion_islr,
            'total_neto' => $total_neto,
            'total_pagado' => $total_pagado,
            'total_saldo' => $total_saldo,
        ];

        $pdf = Pdf::loadView('pdf.finiquito-contable', $data);
        return $pdf->stream('finiquito-contable-' . $invoice->number . '.pdf');
    }

    public function ordenCompra()
    {
        $supplier = Supplier::first();
        // Productos mock (puedes tomar productos reales de la base de datos si existen)
        $items = [
            (object) [
                'item' => '01',
                'partida' => '4.01.01.01.00',
                'descripcion' => 'Computadora Portátil, Procesador i7, 16GB RAM, SSD 512GB',
                'cantidad' => 10,
                'precio_unit' => 100.00,
                'total' => 1000.00,
            ],
            (object) [
                'item' => '02',
                'partida' => '4.01.01.02.00',
                'descripcion' => 'Monitor 24" Full HD',
                'cantidad' => 5,
                'precio_unit' => 50.00,
                'total' => 250.00,
            ],
        ];

        $subtotal = collect($items)->sum('total');
        $iva = $subtotal * 0.16;
        $total = $subtotal + $iva;

        $data = [
            'numero_orden' => 'OC-2026-' . str_pad($supplier->id, 6, '0', STR_PAD_LEFT),
            'fecha' => now()->format('d/m/Y'),
            'forma_pago' => 'Transferencia/Crédito',
            'proceso_contratacion' => 'Contratación Directa',
            'proveedor' => $supplier,
            'condiciones_entrega' => 'Almacén Principal',
            'fecha_limite' => now()->addDays(15)->format('d/m/Y'),
            'incoterm' => 'Libre en Destino',
            'items' => $items,
            'subtotal' => $subtotal,
            'iva' => $iva,
            'total' => $total,
        ];

        $pdf = Pdf::loadView('pdf.orden-compra', $data);
        return $pdf->stream('orden-compra-' . $supplier->id . '.pdf');
    }

    public function ordenPago(Invoice $invoice)
    {
        $invoice->load('supplier');

        // Datos mock de facturas (puedes usar relaciones reales si existen)
        $facturas = [
            (object) [
                'numero' => $invoice->number,
                'control_seniat' => '00-004567',
                'partida' => '4.01.01.01.00',
                'concepto' => 'Cancelación según OC-2026-0001',
                'monto_bruto' => $invoice->total,
            ],
            // Podrías agregar más facturas si el pago agrupa varias
        ];

        $total_bruto = $invoice->total;
        $retencion_iva = $total_bruto * 0.16 * 0.75; // 75% del IVA
        $retencion_islr = $total_bruto * 0.02;       // 2% ISLR (ejemplo)
        $retencion_fiel = $total_bruto * 0.10;       // 10% fiel cumplimiento
        $retencion_laboral = $total_bruto * 0.05;    // 5% laboral
        $total_neto = $total_bruto - $retencion_iva - $retencion_islr - $retencion_fiel - $retencion_laboral;

        $data = [
            'numero_orden_pago' => 'OP-2026-' . str_pad($invoice->id, 6, '0', STR_PAD_LEFT),
            'fecha_emision' => now()->format('d/m/Y'),
            'orden_compra_ref' => 'OC-2026-0001',
            'proceso_contratacion' => 'Contratación Directa N° XXX-2026',
            'proveedor' => $invoice->supplier,
            'banco' => 'Banco Nacional',
            'cuenta' => '0000-0000-00-0000000000',
            'moneda' => 'Bolívares',
            'facturas' => $facturas,
            'total_bruto' => $total_bruto,
            'retencion_iva' => $retencion_iva,
            'retencion_islr' => $retencion_islr,
            'retencion_fiel' => $retencion_fiel,
            'retencion_laboral' => $retencion_laboral,
            'total_neto' => $total_neto,
        ];

        $pdf = Pdf::loadView('pdf.orden-pago', $data);
        return $pdf->stream('orden-pago-' . $invoice->number . '.pdf');
    }


    public function requisicion()
    {
        $product = \App\Models\Product::first(); // Tomamos un producto de ejemplo
        // Items mock (usamos el producto recibido y algunos adicionales)
        $items = [
            (object) [
                'item' => '01',
                'cantidad' => 10,
                'descripcion' => $product->name . ' - ' . ($product->sku ?? 'SKU-001'),
                'partida' => '4.01.01.01.00',
            ],
            (object) [
                'item' => '02',
                'cantidad' => 5,
                'descripcion' => 'Monitor 24" Full HD',
                'partida' => '4.01.01.02.00',
            ],
            (object) [
                'item' => '03',
                'cantidad' => 2,
                'descripcion' => 'Servicio de instalación y configuración',
                'partida' => '4.01.01.03.00',
            ],
        ];

        $data = [
            'numero_requisicion' => 'REQ-2026-' . str_pad($product->id, 6, '0', STR_PAD_LEFT),
            'fecha_solicitud' => now()->format('d/m/Y'),
            'centro_costos' => 'CC-401 / Proyecto',
            'contrato_ref' => 'CONTRATO-2026-0015',
            'gerencia' => 'Gerencia de Tecnología',
            'solicitante' => Auth::user()->name ?? 'Solicitante',
            'fecha_requerida' => now()->addDays(5)->format('d/m/Y'),
            'lugar_entrega' => 'Almacén Central',
            'items' => $items,
            'justificacion' => 'La presente requisición unifica la procura de materiales tecnológicos y la activación del servicio de obras civiles menores asociado directamente al Contrato Marco N° CONTRATO-2026-0015. Esta contratación de servicios es crítica e indispensable para adecuar la infraestructura física (canalización eléctrica y bandejas de red) donde se instalarán los nuevos servidores de la empresa.',
        ];

        $pdf = Pdf::loadView('pdf.requisicion', $data);
        return $pdf->stream('requisicion-' . $product->id . '.pdf');
    }
}
