<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Requisición de Bienes/Servicios</title>
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

        .items-table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        .items-table th { background-color: #1a3b6c; color: #fff; padding: 5px; border: 1px solid #000; font-size: 8px; }
        .items-table td { padding: 5px; border: 1px solid #000; text-align: center; font-size: 9px; }

        .impact-section { page-break-before: always; margin-top: 10px; }
        .impact-title { background-color: #1a3b6c; color: #fff; padding: 5px; font-weight: bold; font-size: 11px; margin-bottom: 10px; }
        .impact-text { border: 1px solid #000; padding: 15px; font-size: 9px; line-height: 1.5; text-align: justify; margin-bottom: 30px; }

        .signatures-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .signatures-table td { padding: 15px; border: 1px dashed #1a3b6c; width: 25%; vertical-align: bottom; text-align: center; font-size: 8px; }
    </style>
</head>
<body>

    <div class="header">
        <div class="logo-section">
            <strong>[NOMBRE DE LA EMPRESA, C.A]</strong><br>
            RIF: G-00000000-0 | Unidad: [Departamento / Unidad Requirente]<br>
            Teléfono: [0212-0000000] | Correo: [almacen@empresa.com.ve]
        </div>
        <div class="title-box">REQUISICIÓN DE BIENES / SERVICIOS</div>
    </div>

    <table class="info-table">
        <thead>
            <tr>
                <th>NÚMERO DE REQUISICIÓN</th>
                <th>FECHA DE SOLICITUD</th>
                <th>CENTRO DE COSTOS / PROYECTO</th>
                <th>N° CONTRATO / OC ASOCIADA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>[REQ-2026-0089]</td>
                <td>DD/MM/AAAA</td>
                <td>[CC-401 / Proyecto]</td>
                <td>[CONTRATO-2026-0015]</td>
            </tr>
        </tbody>
    </table>

    <table class="details-table">
        <tr>
            <td>
                <strong>DATOS DEL SOLICITANTE:</strong><br>
                Gerencia: [Gerencia de Tecnología]<br>
                Solicitante: [Nombre del Solicitante]<br>
                Prioridad: [ ] Baja [X] Media [ ] Alta
            </td>
            <td>
                <strong>CONDICIONES DE REQUERIMIENTO:</strong><br>
                Fecha Requerida: [DD/MM/AAAA]<br>
                Lugar de Entrega: [Almacén Central]<br>
                Tipo: [ ] Bienes [X] Contratación de Servicio
            </td>
        </tr>
    </table>

    <table class="items-table">
        <thead>
            <tr>
                <th>ITEM</th>
                <th>CANT.</th>
                <th>DESCRIPCIÓN DE BIENES O SERVICIOS</th>
                <th>PARTIDA PRESUPUESTARIA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01</td>
                <td>10</td>
                <td>Descripción detallada del material o servicio requerido</td>
                <td>4.01.01.01.00</td>
            </tr>
        </tbody>
    </table>

    <div class="impact-section">
        <div class="impact-title">JUSTIFICACIÓN E IMPACTO DE LA ADQUISICIÓN Y CONTRATACIÓN</div>
        <div class="impact-text">
            La presente requisición unifica la procura de materiales tecnológicos y la activación del servicio de obras civiles menores asociado directamente al Contrato Marco N° CONTRATO-2026-0015. 
            Esta contratación de servicios es crítica e indispensable para adecuar la infraestructura física (canalización eléctrica y bandejas de red) donde se instalarán los nuevos servidores de la empresa. 
            Sin la ejecución de esta obra contratada, los insumos de hardware adquiridos no podrán ser conectados ni energizados en conformidad con las normas de seguridad industrial del Data Center.
        </div>

        <table class="signatures-table">
            <tr>
                <td>Solicitado por:<br><br>Supervisor / Unidad Requirente</td>
                <td>Validado por:<br><br>Gerente de Área Solicitante</td>
                <td>Control Presupuestario:<br><br>Jefe de Control y Partidas</td>
                <td>Aprobado por:<br><br>Dirección de Administración</td>
            </tr>
        </table>
    </div>

</body>
</html>