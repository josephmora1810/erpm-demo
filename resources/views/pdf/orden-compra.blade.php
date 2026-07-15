<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Orden de Compra / Servicio</title>
    <style>
        body { font-family: 'Helvetica', 'Arial', sans-serif; font-size: 10px; color: #000; margin: 0; padding: 0; }
        
        .header { width: 100%; margin-bottom: 15px; }
        .logo-section { text-align: left; margin-bottom: 10px; }
        .title-box { background-color: #1a3b6c; color: #fff; text-align: center; padding: 5px; font-weight: bold; font-size: 14px; margin-bottom: 15px; }

        .info-table { width: 100%; border-collapse: collapse; margin-bottom: 15px; }
        .info-table th { background-color: #1a3b6c; color: #fff; padding: 5px; border: 1px solid #000; font-size: 8px; }
        .info-table td { padding: 5px; border: 1px solid #000; text-align: center; font-size: 9px; }

        .details-table { width: 100%; border-collapse: collapse; margin-bottom: 15px; }
        .details-table td { padding: 8px; border: 1px solid #000; vertical-align: top; width: 50%; font-size: 9px; }

        .items-table { width: 100%; border-collapse: collapse; margin-bottom: 10px; }
        .items-table th { background-color: #1a3b6c; color: #fff; padding: 5px; border: 1px solid #000; font-size: 8px; }
        .items-table td { padding: 5px; border: 1px solid #000; text-align: center; font-size: 9px; }

        .totals-box { width: 300px; float: right; border-collapse: collapse; margin-top: 10px; }
        .totals-box td { padding: 5px; border: 1px solid #000; font-size: 9px; }

        .terms-section { page-break-before: always; margin-top: 20px; }
        .terms-title { font-weight: bold; font-size: 12px; margin-bottom: 10px; text-decoration: underline; }
        .terms-text { font-size: 9px; line-height: 1.5; text-align: justify; }

        .signatures-table { width: 100%; border-collapse: collapse; margin-top: 40px; }
        .signatures-table td { padding: 20px; border: 1px dashed #1a3b6c; width: 33%; vertical-align: bottom; text-align: center; font-size: 9px; }
    </style>
</head>
<body>

    <div class="header">
        <div class="logo-section">
            <strong>[NOMBRE DE LA EMPRESA, C.A]</strong><br>
            RIF: G-00000000-0 | Dirección: [Calle, Avenida, Ciudad, Estado, Venezuela]<br>
            Teléfono: [0212-0000000] | Correo: [compras@empresa.com.ve]
        </div>
        <div class="title-box">ORDEN DE COMPRA/SERVICIO</div>
    </div>

    <table class="info-table">
        <thead>
            <tr>
                <th>NÚMERO DE ORDEN</th>
                <th>FECHA DE EMISIÓN</th>
                <th>FORMA DE PAGO</th>
                <th>PROCESO DE CONTRATACIÓN</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>OC-2026-0001</td>
                <td>DD/MM/AAAA</td>
                <td>Transferencia/Crédito</td>
                <td>Contratación Directa / Concurso N° XXX-2026</td>
            </tr>
        </tbody>
    </table>

    <table class="details-table">
        <tr>
            <td>
                <strong>PROVEEDOR / BENEFICIARIO:</strong><br>
                Razón Social: [Nombre del Proveedor, C.A.]<br>
                RIF: [G-00000000-0]<br>
                Contacto: [Nombre del Vendedor]
            </td>
            <td>
                <strong>CONDICIONES DE DESPACHO / ENTREGA:</strong><br>
                Lugar de Entrega: [Almacén Principal]<br>
                Fecha Límite: [DD/MM/AAAA]<br>
                Incoterm: [Libre en Destino]
            </td>
        </tr>
    </table>

    <table class="items-table">
        <thead>
            <tr>
                <th>ÍTEM</th>
                <th>PARTIDA PRESUPUESTARIA</th>
                <th>DESCRIPCIÓN DE LOS BIENES / SERVICIOS</th>
                <th>CANT.</th>
                <th>PRECIO UNIT.</th>
                <th>TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01</td>
                <td>4.01.01.01.00</td>
                <td>Descripción detallada del producto o servicio</td>
                <td>10</td>
                <td>100,00</td>
                <td>1.000,00</td>
            </tr>
        </tbody>
    </table>

    <table class="totals-box">
        <tr><td>SUB-TOTAL (Mona. Base):</td><td>2.750,00</td></tr>
        <tr><td>I.V.A. Alícuota General (16%):</td><td>440,00</td></tr>
        <tr><td><strong>TOTAL GENERAL COMPRA:</strong></td><td><strong>3.190,00</strong></td></tr>
    </table>

    <div class="terms-section">
        <div class="terms-title">TÉRMINOS LEGALES Y CONDICIONES DE CUMPLIMIENTO</div>
        <div class="terms-text">
            <p><strong>1. FACTURACIÓN Y PROVIDENCIA SNAT/2015/0049:</strong> El Proveedor se obliga a emitir la Factura Comercial definitiva cumpliendo estrictamente con la normativa SENIAT, incluyendo RIF, número de control y desglose de IVA. No se aceptarán tachaduras.</p>
            <p><strong>2. MONEDA Y CONVERSIÓN LEGAL (BCV):</strong> Los precios pactados se liquidarán en Bolívares (Bs.) a la tasa oficial del Banco Central de Venezuela (BCV) vigente a la fecha de facturación o pago.</p>
            <p><strong>3. RETENCIONES FISCALES (IVA e ISLR):</strong> El COMPRADOR actuará como Agente de Retención según la Providencia SNAT/2015/0049 y el Decreto N° 1.808. Los comprobantes serán entregados en los lapsos legales.</p>
            <p><strong>4. MARCO PRESUPUESTARIO:</strong> Esta orden responde al proceso de contratación indicado y cuenta con disponibilidad presupuestaria.</p>
            <p><strong>5. IGTF:</strong> En caso de pagos en moneda extranjera sin mediación bancaria nacional, se aplicará el IGTF correspondiente según la ley vigente.</p>
        </div>

        <table class="signatures-table">
            <tr>
                <td>Solicitado por:<br><br><br>Dpto. Requiriente / Compras</td>
                <td>Control Presupuestario / Finanzas:<br><br><br>Gerencia de Administración</td>
                <td>Aceptado Proveedor:<br><br><br>Firma Autorizada / Sello</td>
            </tr>
        </table>
    </div>

</body>
</html>