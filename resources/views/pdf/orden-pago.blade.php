<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Orden de Pago</title>
    <style>
        body { font-family: 'Helvetica', 'Arial', sans-serif; font-size: 10px; color: #000; margin: 0; padding: 0; }
        
        .header { width: 100%; margin-bottom: 15px; }
        .logo-section { text-align: left; margin-bottom: 10px; font-size: 9px; }
        .title-box { background-color: #1a3b6c; color: #fff; text-align: center; padding: 5px; font-weight: bold; font-size: 14px; margin-bottom: 15px; }

        .info-table { width: 100%; border-collapse: collapse; margin-bottom: 15px; }
        .info-table th { background-color: #1a3b6c; color: #fff; padding: 5px; border: 1px solid #000; font-size: 8px; }
        .info-table td { padding: 5px; border: 1px solid #000; text-align: center; font-size: 9px; }

        .details-table { width: 100%; border-collapse: collapse; margin-bottom: 15px; }
        .details-table td { padding: 8px; border: 1px solid #000; vertical-align: top; width: 50%; font-size: 9px; }

        .items-table { width: 100%; border-collapse: collapse; margin-bottom: 10px; }
        .items-table th { background-color: #1a3b6c; color: #fff; padding: 5px; border: 1px solid #000; font-size: 8px; }
        .items-table td { padding: 5px; border: 1px solid #000; text-align: center; font-size: 9px; }

        .calc-section { page-break-before: always; margin-top: 10px; }
        .calc-table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        .calc-table td { padding: 6px; border: 1px solid #000; font-size: 9px; }

        .obs-title { font-weight: bold; font-size: 10px; margin-bottom: 5px; text-decoration: underline; }
        .obs-text { font-size: 9px; line-height: 1.4; text-align: justify; margin-bottom: 20px; }

        .signatures-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .signatures-table td { padding: 15px; border: 1px dashed #1a3b6c; width: 25%; vertical-align: bottom; text-align: center; font-size: 8px; }
    </style>
</head>
<body>

    <div class="header">
        <div class="logo-section">
            <strong>[NOMBRE DE LA EMPRESA, C.A]</strong><br>
            RIF: G-00000000-0 | Dirección: [Calle, Avenida, Ciudad, Estado, Venezuela]<br>
            Teléfono: [0212-0000000] | Correo: [finanzas@empresa.com.ve]
        </div>
        <div class="title-box">ORDEN DE PAGO</div>
    </div>

    <table class="info-table">
        <thead>
            <tr>
                <th>NÚMERO ORDEN DE PAGO</th>
                <th>FECHA DE EMISIÓN</th>
                <th>N° ORDEN DE COMPRA</th>
                <th>PROCESO DE CONTRATACIÓN</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>OP-2026-0001 [cite: 122]</td>
                <td>DD/MM/AAAA</td>
                <td>OC-2026-0001</td>
                <td>Contratación Directa / Concurso Abierto N° XXX-2026 [cite: 122]</td>
            </tr>
        </tbody>
    </table>

    <table class="details-table">
        <tr>
            <td>
                <strong>BENEFICIARIO DEL PAGO:</strong><br>
                Razón Social: [Nombre del Proveedor, C.A.]<br>
                RIF: [G-00000000-0]<br>
                Contacto: [Nombre del Vendedor] [cite: 123]
            </td>
            <td>
                <strong>MÉTODO Y DATOS DE TRANSFERENCIA:</strong><br>
                Banco: [Nombre del Banco Nacional]<br>
                Cuenta: [0000-0000-00-0000000000]<br>
                Moneda: [Bolívares / Divisas] [cite: 123]
            </td>
        </tr>
    </table>

    <table class="items-table">
        <thead>
            <tr>
                <th>N° FACTURA</th>
                <th>N° CONTROL SENIAT</th>
                <th>PARTIDA PRESUPUESTARIA</th>
                <th>CONCEPTO / DESCRIPCIÓN</th>
                <th>MONTO BRUTO (Bs.)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>FAC-000123</td>
                <td>00-004567</td>
                <td>4.01.01.01.00</td>
                <td>Cancelación primer lote según OC</td>
                <td>1.000,00</td>
            </tr>
        </tbody>
    </table>

    <div class="calc-section">
        <div class="title-box" style="font-size: 11px;">CÁLCULO DE IMPUESTOS, RETENCIONES LEGALES, GARANTÍAS Y LIQUIDACIÓN NETA</div>
        <table class="calc-table">
            <tr><td>TOTAL MONTO BRUTO:</td><td>2.750,00</td></tr>
            <tr><td>(-) RETENCIÓN I.V.A. (75%):</td><td>-330,00 [cite: 127]</td></tr>
            <tr><td>(-) RETENCIÓN I.S.L.R.:</td><td>-55,00 [cite: 127]</td></tr>
            <tr><td>(-) RETENCIÓN FIEL CUMPLIMIENTO (10%):</td><td>-275,00 [cite: 127]</td></tr>
            <tr><td>(-) RETENCIÓN LABORAL (5%):</td><td>-137,50 [cite: 127]</td></tr>
            <tr style="font-weight: bold; background-color: #f2f2f2;"><td>TOTAL NETO A LIQUIDAR:</td><td>2.392,50 [cite: 127]</td></tr>
        </table>

        <div class="obs-title">OBSERVACIONES Y NOTAS DE FISCALIZACIÓN INTERNA</div>
        <div class="obs-text">
            1. <strong>VERIFICACIÓN:</strong> Se tramita el Comprobante de Retención IVA según Providencia SENIAT N° SNAT/2015/0049[cite: 129].<br>
            2. <strong>CONVERSIÓN:</strong> Los montos en divisas se liquidan a tasa BCV a la fecha valor del desembolso[cite: 130].<br>
            3. <strong>GARANTÍAS:</strong> Las retenciones de Fiel Cumplimiento (10%) y Laboral (5%) se liquidarán contra Acta de Aceptación Definitiva[cite: 131, 132].<br>
            4. <strong>SOPORTE:</strong> Esta orden requiere factura original con control SENIAT, orden de compra y acta de recepción definitiva para ser válida[cite: 133].
        </div>

        <table class="signatures-table">
            <tr>
                <td>Elaborado por:<br>Analista Cuentas por Pagar</td>
                <td>Revisado por:<br>Jefe Presupuesto/Impuestos</td>
                <td>Autorizado Pago:<br>Gerencia Administración</td>
                <td>Ejecutado por:<br>Tesorería</td>
            </tr>
        </table>
    </div>

</body>
</html>