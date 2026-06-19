<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factura {{ $invoice->number }}</title>
    <style>
        body { font-family: 'Helvetica', 'Arial', sans-serif; font-size: 14px; color: #333; }
        .header { width: 100%; margin-bottom: 30px; border-bottom: 2px solid #e2e8f0; padding-bottom: 10px; }
        .header td { vertical-align: top; }
        .company-info { text-align: left; }
        .invoice-info { text-align: right; }
        .title { font-size: 24px; font-weight: bold; color: #1e293b; margin-bottom: 5px; }
        .details-table { width: 100%; margin-bottom: 30px; }
        .details-table td { padding: 5px 0; vertical-align: top; }
        .items-table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        .items-table th { background-color: #f8fafc; padding: 10px; text-align: left; border-bottom: 2px solid #cbd5e1; }
        .items-table td { padding: 10px; border-bottom: 1px solid #e2e8f0; }
        .total-box { float: right; width: 300px; }
        .total-box table { width: 100%; border-collapse: collapse; }
        .total-box td { padding: 8px; text-align: right; }
        .total-row td { font-weight: bold; font-size: 18px; border-top: 2px solid #333; }
        .footer { position: fixed; bottom: -30px; left: 0px; right: 0px; height: 50px; text-align: center; font-size: 12px; color: #64748b; }
    </style>
</head>
<body>

    <table class="header">
        <tr>
            <td class="company-info" width="50%">
                <div class="title">ERP CORPORATIVO</div>
                <p>Av. Principal, Edificio Empresarial<br>
                Tel: +1 234 567 8900<br>
                Email: admin@empresa.com</p>
            </td>
            <td class="invoice-info" width="50%">
                <div class="title" style="color: #ef4444;">{{ strtoupper($invoice->invoice_type->getLabel()) }}</div>
                <p><strong>Número:</strong> {{ $invoice->number }}<br>
                <strong>Fecha:</strong> {{ $invoice->created_at->format('d/m/Y') }}<br>
                <strong>Estado:</strong> {{ strtoupper($invoice->status->getLabel()) }}</p>
            </td>
        </tr>
    </table>

    <table class="details-table">
        <tr>
            <td width="50%">
                <strong>Datos del Cliente/Proveedor:</strong><br>
                {{ $invoice->customer ? $invoice->customer->name : ($invoice->supplier ? $invoice->supplier->name : 'N/A') }}<br>
                <strong>Documento:</strong> 
                {{ $invoice->customer ? $invoice->customer->document_type->value . '-' . $invoice->customer->document_number : ($invoice->supplier ? $invoice->supplier->document_type->value . '-' . $invoice->supplier->document_number : '') }}<br>
                <strong>Email:</strong> {{ $invoice->customer ? $invoice->customer->email : ($invoice->supplier ? $invoice->supplier->email : 'N/A') }}
            </td>
        </tr>
    </table>

    <table class="items-table">
        <thead>
            <tr>
                <th>Descripción</th>
                <th style="text-align: right;">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Servicios / Productos facturados según documento {{ $invoice->number }}</td>
                <td style="text-align: right;">$ {{ number_format($invoice->total, 2) }}</td>
            </tr>
        </tbody>
    </table>

    <div class="total-box">
        <table>
            <tr>
                <td>Subtotal:</td>
                <td>$ {{ number_format($invoice->total / 1.16, 2) }}</td>
            </tr>
            <tr>
                <td>Impuestos (16%):</td>
                <td>$ {{ number_format($invoice->total - ($invoice->total / 1.16), 2) }}</td>
            </tr>
            <tr class="total-row">
                <td>TOTAL:</td>
                <td>$ {{ number_format($invoice->total, 2) }}</td>
            </tr>
        </table>
    </div>

    <div class="footer">
        Documento generado automáticamente por el Sistema Administrativo ERPM.
    </div>

</body>
</html>