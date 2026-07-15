<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comprobante de Retención IVA</title>
    <style>
        /* (Mantén los estilos que ya tienes) */
        body { font-family: 'Helvetica', 'Arial', sans-serif; font-size: 10px; color: #000; margin: 0; padding: 0; }
        .header { width: 100%; margin-bottom: 20px; text-align: center; }
        .title { font-size: 14px; font-weight: bold; color: #1a3b6c; margin-bottom: 5px; }
        .subtitle { font-size: 10px; color: #1a3b6c; margin-bottom: 15px; }
        .info-table { width: 100%; border-collapse: collapse; margin-bottom: 15px; }
        .info-table th { background-color: #1a3b6c; color: #fff; padding: 6px; border: 1px solid #000; font-size: 9px; }
        .info-table td { padding: 8px; border: 1px solid #000; text-align: center; font-weight: bold; }
        .parties-table { width: 100%; border-collapse: collapse; margin-bottom: 15px; }
        .parties-table td { padding: 10px; border: 1px solid #000; vertical-align: top; width: 50%; font-size: 9px; }
        .items-table { width: 100%; border-collapse: collapse; margin-bottom: 10px; }
        .items-table th { background-color: #1a3b6c; color: #fff; padding: 5px; border: 1px solid #000; font-size: 8px; text-align: center; }
        .items-table td { padding: 5px; border: 1px solid #000; text-align: center; font-size: 8px; }
        .totals-table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        .totals-table td { padding: 8px; border: 1px solid #000; font-weight: bold; font-size: 9px; }
        .signatures-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .signatures-table td { padding: 15px; border: 1px dashed #1a3b6c; width: 50%; vertical-align: bottom; text-align: center; }
        .sign-line { border-top: 1px solid #000; margin-top: 40px; width: 80%; margin-left: auto; margin-right: auto; }
    </style>
</head>
<body>

    <div class="header">
        <div>REPÚBLICA BOLIVARIANA DE VENEZUELA</div>
        <div style="font-weight: bold;">{{ config('app.name', 'MI EMPRESA, C.A') }}</div>
        <div>R.I.F.: {{ config('app.rif', 'J-00000000-0') }} | Dirección Fiscal: {{ config('app.address', 'Caracas, Venezuela') }}</div>
        <div style="margin-top:5px;">Agente de Retención designado según Providencia Administrativa N° [SNAT/2015/0049]</div>
        <div class="title" style="margin-top:15px;">COMPROBANTE DE RETENCIÓN DEL IMPUESTO AL VALOR AGREGADO (I.V.A.)</div>
        <div class="subtitle">[Ley del Impuesto al Valor Agregado - Art. 11 / Providencia Administrativa SENIAT N° SNAT/2015/0049, Art. 16]</div>
    </div>

    <table class="info-table">
        <thead>
            <tr>
                <th>N° COMPROBANTE</th>
                <th>FECHA DE EMISIÓN</th>
                <th>PERIODO FISCAL (AÑO/MES)</th>
                <th>ORDEN DE COMPRA / CONTRATO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $invoice->id }}-{{ now()->format('Ym') }}</td>
                <td>{{ now()->format('d / m / Y') }}</td>
                <td>{{ now()->format('Y / m') }}</td>
                <td>OC-{{ $invoice->number ?? 'N/A' }} / CONTRATO-{{ $invoice->id }}</td>
            </tr>
        </tbody>
    </table>

    <table class="parties-table">
        <tr>
            <td>
                <strong>1. DATOS DEL AGENTE DE RETENCIÓN:</strong><br>
                Razón Social: {{ config('app.name', 'Mi Empresa, C.A') }}<br>
                R.I.F. Agente: {{ config('app.rif', 'J-00000000-0') }}<br>
                Domicilio: {{ config('app.address', 'Caracas, Distrito Capital') }}
            </td>
            <td>
                <strong>2. DATOS DEL SUJETO PASIVO (PROVEEDOR):</strong><br>
                Nombre / Razón Social: {{ $invoice->supplier->name ?? 'Proveedor no especificado' }}<br>
                R.I.F. Proveedor: {{ $invoice->supplier->rif ?? 'J-12345678-9' }}<br>
                Dirección Fiscal: {{ $invoice->supplier->address ?? 'Dirección del Proveedor' }}
            </td>
        </tr>
    </table>

    <div style="font-weight: bold; margin-bottom: 5px; font-size: 10px;">3. DETALLE DE LAS OPERACIONES REALIZADAS Y RETENCIONES APLICADAS</div>
    <table class="items-table">
        <thead>
            <tr>
                <th>Oper N°</th>
                <th>Fecha Fact.</th>
                <th>N° Fact.</th>
                <th>N° Control</th>
                <th>Tipo Trans.</th>
                <th>Total Compra con IVA</th>
                <th>Base Imponible</th>
                <th>% Alíc.</th>
                <th>IVA Retenido (75%)</th>
            </tr>
        </thead>
        <tbody>
            @php
                // Simulamos datos de una sola factura, pero podrías tener varias si la factura tiene items.
                $base = $invoice->total / 1.16; // Suponiendo 16% de IVA incluido
                $iva = $invoice->total - $base;
                $retenido = $iva * 0.75; // 75% de retención
            @endphp
            <tr>
                <td>01</td>
                <td>{{ $invoice->created_at->format('d/m/Y') }}</td>
                <td>{{ $invoice->number }}</td>
                <td>{{ $invoice->control_number ?? '00-1122' }}</td>
                <td>01-REG</td>
                <td>{{ number_format($invoice->total, 2, ',', '.') }}</td>
                <td>{{ number_format($base, 2, ',', '.') }}</td>
                <td>16%</td>
                <td>{{ number_format($retenido, 2, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>

    <table class="totals-table">
        <tr>
            <td>TOTALES GENERALES (Bs.):</td>
            <td>Base: {{ number_format($base, 2, ',', '.') }}</td>
            <td>Total IVA: {{ number_format($iva, 2, ',', '.') }}</td>
            <td>Retenido: {{ number_format($retenido, 2, ',', '.') }}</td>
        </tr>
    </table>

    <table class="signatures-table">
        <tr>
            <td>
                <strong>Por el Agente de Retención:</strong>
                <div class="sign-line"></div>
                Firma Autorizada / Sello de la Empresa<br>
                Firma del Analista de Impuestos
            </td>
            <td>
                <strong>Por el Sujeto Pasivo (Proveedor):</strong>
                <div class="sign-line"></div>
                Firma en Señal de Aceptación y Recibido<br>
                Fecha de Recepción: ____/____/____
            </td>
        </tr>
    </table>

</body>
</html>
