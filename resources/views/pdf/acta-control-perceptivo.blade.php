<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acta de Control Perceptivo</title>
    <style>
        /* Tipografía y configuración base */
        body { font-family: 'Helvetica', 'Arial', sans-serif; font-size: 10px; color: #000; margin: 0; padding: 0; }
        
        /* Encabezados y Títulos */
        .header { width: 100%; margin-bottom: 20px; }
        .company-info { text-align: left; font-weight: bold; color: #1a3b6c; font-size: 11px; }
        .main-title { text-align: center; font-size: 14px; font-weight: bold; color: #1a3b6c; margin-bottom: 2px; }
        .main-subtitle { text-align: center; font-size: 11px; color: #1a3b6c; font-style: italic; text-decoration: underline; margin-bottom: 15px; }
        .section-title { font-size: 11px; font-weight: bold; color: #1a3b6c; margin-top: 15px; margin-bottom: 5px; }

        /* Estructura de Tablas Generales */
        .details-table { width: 100%; border-collapse: collapse; margin-bottom: 15px; }
        .details-table td { padding: 6px; border: 1px solid #000; vertical-align: middle; }
        
        /* Estructura de Tabla de Ítems (Cabeceras azules) */
        .items-table { width: 100%; border-collapse: collapse; margin-bottom: 15px; }
        .items-table th { background-color: #1a3b6c; color: #ffffff; padding: 6px; text-align: center; border: 1px solid #000; font-size: 9px; font-weight: bold; }
        .items-table td { padding: 6px; border: 1px solid #000; text-align: center; vertical-align: middle; }

        /* Utilidades de texto */
        .text-left { text-align: left !important; }
        .text-bold { font-weight: bold; }
        .red-text { color: #c00000; }

        /* Caja de Observaciones */
        .obs-box { border: 1px solid #000; padding: 10px; height: 60px; margin-bottom: 15px; }
        .obs-line { border-bottom: 1px solid #000; margin-top: 15px; width: 100%; }

        /* Contenedor de Firmas optimizado para DomPDF */
        .signatures-table { width: 100%; border-collapse: collapse; margin-top: 5px; }
        .signatures-table td { padding: 0; vertical-align: top; border: none; }
        .sign-box { border: 1px dashed #1a3b6c; padding: 10px; text-align: center; height: 95px; width: 95%; margin: 0 auto; }
        .sign-title { font-size: 9px; }
        .sign-subtitle { font-size: 8px; margin-bottom: 30px; }
        .sign-line { border-bottom: 1px solid #000; margin: 0 10px 5px 10px; }
        .sign-fields { text-align: left; font-size: 9px; margin-left: 10px; }
    </style>
</head>
<body>

    <table class="header">
        <tr>
            <td class="company-info">
                [NOMBRE DE LA EMPRESA, C.A]<br>
                [DEPARTAMENTO DE BIENES NACIONALES / AUDITORÍA / ALMACÉN]
            </td>
        </tr>
    </table>

    <div class="main-title">ACTA DE CONTROL PERCEPTIVO</div>
    <div class="main-subtitle">(Verificación Física, Cualitativa y Cuantitativa de Bienes Recibidos)</div>

    <table class="items-table">
        <thead>
            <tr>
                <th width="33%">N° CONTROL PERCEPTIVO</th>
                <th width="33%">FECHA DE VERIFICACIÓN</th>
                <th width="34%">ESTADO DEL ACTA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-bold">CP-2026-00155</td>
                <td class="text-bold">22 / 06 / 2026</td>
                <td class="text-bold">[ &nbsp;&nbsp; ] APROBADO &nbsp;&nbsp;&nbsp; [ &nbsp;&nbsp; ] RECHAZADO</td>
            </tr>
        </tbody>
    </table>

    <div class="section-title">1. VÍNCULO DOCUMENTAL</div>
    <table class="details-table">
        <tr>
            <td width="25%"><span class="red-text text-bold">Contratación / Concurso</span> <span class="text-bold">N°:</span></td>
            <td width="25%">[ ________________ ]</td>
            <td width="25%"><span class="red-text text-bold">Fecha Contrato:</span></td>
            <td width="25%">[ ____ / ____ / 2026 ]</td>
        </tr>
        <tr>
            <td><span class="red-text text-bold">Requisición de Compra</span> <span class="text-bold">N°:</span></td>
            <td>[ ________________ ]</td>
            <td><span class="red-text text-bold">Fecha Requisición:</span></td>
            <td>[ ____ / ____ / 2026 ]</td>
        </tr>
        <tr>
            <td><span class="red-text text-bold">Orden de Compra</span> <span class="text-bold">N°:</span></td>
            <td>[ ________________ ]</td>
            <td><span class="red-text text-bold">Fecha Orden:</span></td>
            <td>[ ____ / ____ / 2026 ]</td>
        </tr>
        <tr>
            <td><span class="red-text text-bold">Factura Comercial</span> <span class="text-bold">N°:</span></td>
            <td>[ ________________ ]</td>
            <td><span class="red-text text-bold">Fecha Factura:</span></td>
            <td>[ ____ / ____ / 2026 ]</td>
        </tr>
    </table>

    <div class="section-title">2. DATOS DEL PROVEEDOR / CONTRATISTA</div>
    <table class="details-table">
        <tr>
            <td width="15%" style="border-right: none;"><span class="red-text text-bold">Razón</span> <span class="text-bold">Social:</span></td>
            <td width="50%" style="border-left: none;">__________________________________________________</td>
            <td width="15%" style="border-right: none;" class="text-bold">R.I.F. / C.I.:</td>
            <td width="20%" style="border-left: none;">_______________________</td>
        </tr>
    </table>

    <div class="section-title">3. VERIFICACIÓN FÍSICA, CUALITATIVA Y CUANTITATIVA DE LOS BIENES</div>
    <table class="items-table">
        <thead>
            <tr>
                <th width="5%">Ítem</th>
                <th width="35%">Descripción Detallada del Bien<br><span style="font-weight: normal; font-size: 8px;">(Especificaciones Técnicas / Marca / Modelo)</span></th>
                <th width="8%">Cant.<br>Fact.</th>
                <th width="8%">Cant.<br>Recib.</th>
                <th width="8%">Cumple<br>Cant.</th>
                <th width="8%">Cumple<br>Espec.</th>
                <th width="8%">Estado<br>(B / R)</th>
                <th width="20%">Observaciones /<br>Hallazgos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01</td>
                <td class="text-left"><span class="red-text">[Ejemplo: Computadora Portátil, Procesador</span> i7, 16GB RAM, SSD 512GB]</td>
                <td>10</td>
                <td>10</td>
                <td>[ S ]</td>
                <td>[ S ]</td>
                <td>[ B ]</td>
                <td class="text-left"><span class="red-text">Completo y<br>operativo.</span></td>
            </tr>
            <tr>
                <td style="height: 15px;">02</td>
                <td></td>
                <td></td>
                <td></td>
                <td>[ &nbsp;&nbsp; ]</td>
                <td>[ &nbsp;&nbsp; ]</td>
                <td>[ &nbsp;&nbsp; ]</td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <div class="section-title">4. OBSERVACIONES</div>
    <div class="obs-box">
        <span style="text-decoration: underline;">Habiendo realizado el examen perceptivo (físico, cualitativo y cuantitativo) de los bienes entregados por el proveedor, se deja</span><br>
        <span style="text-decoration: underline;" class="red-text">constancia de lo siguiente:</span>
        <div class="obs-line"></div>
        <div class="obs-line"></div>
        <div class="obs-line"></div>
    </div>

    <div class="section-title">5. FIRMAS DE CONFORMIDAD Y VALIDACIÓN</div>
    <table class="signatures-table">
        <tr>
            <td width="32%">
                <div class="sign-box">
                    <div class="sign-title">POR EL ENTE RECEPTOR</div>
                    <div class="sign-subtitle">(<span class="red-text">Responsable de</span> Control <span class="red-text">Perceptivo</span>)</div>
                    
                    <div class="sign-line"></div>
                    <div class="sign-title"><span class="red-text">Firma y Sello</span></div>
                    <div class="sign-fields"><span class="red-text">Nombre:</span></div>
                    <div class="sign-fields">C.I.:</div>
                </div>
            </td>
            <td width="2%"></td> <td width="32%">
                <div class="sign-box">
                    <div class="sign-title">POR EL ÁREA SOLICITANTE</div>
                    <div class="sign-subtitle">(<span class="red-text">Usuario</span> Final / <span class="red-text">Unidad Técnica</span>)</div>
                    
                    <div class="sign-line"></div>
                    <div class="sign-title"><span class="red-text">Firma y Sello</span></div>
                    <div class="sign-fields"><span class="red-text">Nombre:</span></div>
                    <div class="sign-fields">C.I.:</div>
                </div>
            </td>
            <td width="2%"></td> <td width="32%">
                <div class="sign-box">
                    <div class="sign-title">POR EL PROVEEDOR</div>
                    <div class="sign-subtitle">(<span class="red-text">Entrega</span> / <span class="red-text">Transportista</span>)</div>
                    
                    <div class="sign-line"></div>
                    <div class="sign-title"><span class="red-text">Firma y Sello</span></div>
                    <div class="sign-fields"><span class="red-text">Nombre:</span></div>
                    <div class="sign-fields">C.I.:</div>
                </div>
            </td>
        </tr>
    </table>

</body>
</html>