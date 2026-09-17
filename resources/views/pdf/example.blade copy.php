<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato de Seguro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.4;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            font-weight: bold;
            font-size: 16px;
        }

        .titulo {
    font-weight: bold;
    font-size: 50px;
    margin-top: -25;
    margin-right: 0;
    margin-bottom: 0;
    margin-left: 0;
}
.contract-info {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        .contract-info td {
            padding: 0 5px;
            border: 1px solid #000000;
        }



        .contract-infoS {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        .contract-infoS td {
            padding: 0 5px;
            border: 1px solid #ddd;
        }

        .contract-infoS td {
            padding: 0 5px;
            border: 0px solid #ddd;
        }
        .section-title {
            font-weight: bold;
            text-align: center;
            margin: 15px 0;
        }
        .signature-area {
            margin-top: 50px;
        }
        .signature-line {
            border-top: 1px solid #000;
            width: 200px;
            display: inline-block;
            margin-top: 40px;
        }
        .footer {
            margin-top: 50px;
            font-size: 10px;
            text-align: center;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo"> <strong class="titulo">RUEDA SEGURO C.A.</strong> SERIE  D {{ $seguro->numero_seguro }}</div>
        <div><u> HACIENDO EL CAMINO MAS CON MAS CONFIABLE Y SEGURO. RIF-J29505309-0</div>
    </div>
    <div>Inscrita en el Registro Mercantil de la Circunscripción Judicial del Estado Lara Bajo el Tomo 20-A-Nº 47   </u></div>
  
    <table class="contract-info">
        <tr>
            <td>CONTRATO: {{ $seguro->numero_seguro }} VIGENCIA DESDE: 28/04/2025     HASTA: 28/04/2026      A LAS: #####      ASESOR:  OFIC</td>
          
        </tr>
       
       
      
    </table>

  
    <table class="contract-infoS">
        <tr>
            <td width="20%">CONTRATANTE:</td>
            <td width="50%">{{ $seguro->contratante->nombre }} {{ $seguro->contratante->apellido }}</td>
            <td width="30%"></td>
     
        </tr>
        <tr>
            <td>C.I./RIF:</td>
            <td>V-{{ $seguro->contratante->cedula }}</td>
            <td >TELÉFONOS: {{ $seguro->contratante->telefono }}</td>
        </tr>

        <tr>
            <td >DIRECCIÓN:</td>
            <td>{{ $seguro->contratante->direccion }}</td>
        </tr>
    
        <tr>
            <td >OFICINA:</td>
            <td>OFICINA VIRTUAL</td>
        </tr>
 
    </table>

    
    <table class="contract-info"> 
        <tr>
            <td style="text-align: center;" >DATOS DEL VEHÍCULO</td>
        </tr>
    </table>
<table class="contract-infoS">
    <tr>
        <td width="25%">MARCA:</td>
        <td width="25%">{{ $seguro->vehiculo->marca }}</td>
        <td width="25%">MODELO:</td>
        <td width="25%">{{ $seguro->vehiculo->modelo }}</td>
    </tr>
    <tr>
        <td>AÑO:</td>
        <td>{{ $seguro->vehiculo->anio }}</td>
        <td>PLACA:</td>
        <td>{{ $seguro->vehiculo->placas }}</td>
    </tr>
    <tr>
        <td>SERIAL DE MOTOR:</td>
        <td>{{ $seguro->vehiculo->motor }}</td>
        <td>SERIAL DE CARROCERÍA:</td>
        <td>{{ $seguro->vehiculo->carroceria }}</td>
    </tr>
    <tr>
        <td>PESO:</td>
        <td>{{ $seguro->vehiculo->peso }} kg</td>
        <td>COLOR:</td>
        <td>{{ $seguro->vehiculo->color }}</td>
    </tr>
    <tr>
        <td>TIPO:</td>
        <td>{{ $seguro->vehiculo->tipo }}</td>
        <td>CLASE:</td>
        <td>{{ $seguro->vehiculo->clase_vehiculo }}</td>
    </tr>
    <tr>
        <td>PUENTES:</td>
        <td>{{ $seguro->vehiculo->puesto }}</td>
        <td>USO:</td>
        <td>{{ $seguro->vehiculo->uso }}</td>
    </tr>
</table>


  
    <div class="section-title">COBERTURAS</div>
    <table class="contract-info">
        <tr>
            <th width="60%">DESCRIPCIÓN</th>
            <th width="20%">MONTO (BS.)</th>
            <th width="20%">PAGO</th>
        </tr>
        <tr>
            <td>POR DAÑOS A COSAS</td>
            <td>4.905,90</td>
            <td>90,85</td>
        </tr>
        <tr>
            <td>POR DAÑOS A PERSONAS</td>
            <td>5.996,10</td>
            <td>72,68</td>
        </tr>
        <tr>
            <td>COBERTURA DE EXCESO</td>
            <td>1.090,20</td>
            <td>0,00</td>
        </tr>
        <tr>
            <td>GASTOS DE EMISIÓN</td>
            <td></td>
            <td>18,17</td>
        </tr>
        <tr>
            <td><strong>SUBTOTAL</strong></td>
            <td></td>
            <td>181,70</td>
        </tr>
        <tr>
            <td><strong>DESCUENTO</strong></td>
            <td></td>
            <td>0,00</td>
        </tr>
        <tr>
            <td><strong>TOTAL PAGO</strong></td>
            <td></td>
            <td>181,70</td>
        </tr>
    </table>

    <div class="signature-area">
        <div style="float: left; width: 50%;">
            <div>FIRMA DEL CONTRATANTE</div>
            <div class="signature-line"></div>
        </div>
        <div style="float: right; width: 50%; text-align: right;">
            <div>FIRMA AUTORIZADA</div>
            <div class="signature-line"></div>
        </div>
        <div style="clear: both;"></div>
    </div>

    <div class="footer">
        <p>Para la validez del presente contrato deberá estar firmado y sellado por la persona autorizada por ServiORIENTE</p>
        <p>e-mail: serviorientecontigo@gmail.com | www.servioriente.com</p>
        <p>LA FIRMA DE ESTE CONTRATO OBLIGA A LAS PARTES A ASUMIR LAS CLAUSULAS ESTABLECIDAS EN EL CONTRATO DE GARANTIA (RCV)</p>
        <p>0412-1724006 | @servioriente_rcv</p>
    </div>

    <!-- Página 2 - Términos y condiciones -->
    <div class="page-break"></div>
    
    <div class="header">
        <div class="logo">SERVICIO Y ASISTENCIA VIAL DE ORIENTE</div>
        <div>Contrato VIRT-7312-2024 - Términos y Condiciones</div>
    </div>

    <h3>CONDICIONADO</h3>
    
    <p>Entre SERVICIO Y ASISTENCIA VIAL DE ORIENTE COMPAÑÍA ANÓNIMA, inscrita ante el Registro Mercantil de la Circunscripción Judicial del Estado Ayure, que en adelante se denominará "La compañía" y el Contratante cuyo nombre e identificación se encuentra en el contrato de Garantía que se celebra, derivado de la circulación del vehículo descrito en el contrato se asume el respaldo financiero que otorga la Garantía bajo los términos y condiciones establecidas en las siguientes cláusulas:</p>
    
    <h4>PRIMERA: OBJETO DEL CONTRATO DE GARANTÍA</h4>
    <p>"La compañía" se compromete a cubrir, en forma parcial o total, en los términos establecidos en el contrato de Garantía por los daños a personas o cosas causados a terceros por los cuales deba responder el contratante o el conductor, con motivo de la circulación del vehículo objeto de este contrato de Garantía dentro del Territorio de la República Bolivariana de Venezuela de conformidad con las leyes, pero limitados a las cantidades máximas previstas en este contrato de Garantía por cada accidente.</p>
    
    <h4>SEGUNDA: DEFINICIONES</h4>
    <p><strong>COMPAÑÍA:</strong> Persona Jurídica que asume los compromisos amparados en el contrato de Garantía.</p>
    <p><strong>CONTRATANTE:</strong> Persona natural y jurídica propietaria, conductor o autorizado del vehículo garantizado, que en sus bienes o en sus intereses económicos está expuesta a los compromisos amparados en el contrato de Garantía.</p>
    
    <!-- Continuar con las demás cláusulas según sea necesario -->
    
    <!-- Página 3 - Comprobante de pago -->
    <div class="page-break"></div>
    
    <div class="header">
        <div class="logo">SERVICIO Y ASISTENCIA VIAL DE ORIENTE</div>
        <div>Comprobante de Pago</div>
    </div>
    
    <table style="width: 100%; margin-top: 30px;">
        <tr>
            <td width="30%"><strong>FECHA:</strong></td>
            <td width="70%">19-02-2024</td>
        </tr>
        <tr>
            <td><strong>NOMBRE Y APELLIDO:</strong></td>
            <td>JUAN PÉREZ GÓMEZ</td>
        </tr>
        <tr>
            <td><strong>CÉDULA / RIF:</strong></td>
            <td>V-12345678</td>
        </tr>
        <tr>
            <td><strong>DIRECCIÓN FISCAL:</strong></td>
            <td>URB. LAS ACACIAS, CALLE 5, CASA 12</td>
        </tr>
    </table>
    
    <table style="width: 100%; margin-top: 20px; border-collapse: collapse;">
        <tr>
            <th style="border: 1px solid #000; padding: 5px; text-align: left;">DESCRIPCIÓN</th>
            <th style="border: 1px solid #000; padding: 5px; text-align: right;">MONTO</th>
        </tr>
        <tr>
            <td style="border: 1px solid #000; padding: 5px;">01 ADQUISICION DE RCV</td>
            <td style="border: 1px solid #000; padding: 5px; text-align: right;">181,70</td>
        </tr>
        <tr>
            <td style="border: 1px solid #000; padding: 5px;"><strong>TOTAL</strong></td>
            <td style="border: 1px solid #000; padding: 5px; text-align: right;"><strong>181,70</strong></td>
        </tr>
    </table>


<!-- Página 4 - Carnet -->









<div class="header">
    <div class="logo">SERVICIO Y ASISTENCIA VIAL DE ORIENTE</div>
    <div>Carnet de Seguro VIRT-{{ $seguro->numero_seguro }}</div>
</div>
<table>
    <tr>
        <td>

        
            
            <div style="text-align: center; margin-top: 20px;">
                <!-- Marco principal del carnet -->
                <div style="border: 2px solid #000; width: 85mm; height: 54mm; margin: 0 auto; padding: 10px;  background-color: #f9f9f9;">
                    <!-- Logo y título -->
                    <div style="text-align: center; margin-bottom: 10px;">
                        <div style="font-weight: bold; font-size: 14px; color: #003366;">ServiORIENTE</div>
                        <div style="font-size: 10px; margin-top: 3px;">SEGURO DE RESPONSABILIDAD CIVIL VEHICULAR</div>
                    </div>
                    
                    <!-- Línea divisoria -->
                    <hr style="border-top: 1px solid #000; margin: 5px 0;">
                    
                    <!-- Datos del contratante -->
                    <div style="text-align: left; font-size: 9px; margin-top: 0px;">
                        <div><strong>APELLIDOS Y NOMBRES - CONTRATANTE (C.I./RIF)</strong></div>
                        <div>{{ $seguro->contratante->apellido }} {{ $seguro->contratante->nombre }} (V-{{ $seguro->contratante->cedula }})</div>
                    </div>
                    
                    <!-- Datos del propietario -->
                    <div style="text-align: left; font-size: 9px; margin-top: 0px;">
                        <div><strong>APELLIDOS Y NOMBRES - PROPIETARIO (C.I./RIF)</strong></div>
                        <div>{{ $seguro->contratante->apellido }} {{ $seguro->contratante->nombre }} (V-{{ $seguro->contratante->cedula }})</div>
                    </div>
                    
                    <!-- Dirección -->
                    <div style="text-align: left; font-size: 9px; margin-top: 0px;">
                        <div><strong>DIRECCIÓN</strong></div>
                        <div>{{ $seguro->contratante->direccion }}</div>
                    </div>
                    
                    <!-- Línea divisoria -->
                    <hr style="border-top: 1px solid #000; margin: 8px 0;">
                    
                    <!-- Código de verificación -->
                    <div style="text-align: center; font-size: 10px; margin-top: 5px;">
                        <div><strong>CÓDIGO DE VERIFICACIÓN</strong></div>
                        <div style="font-weight: bold;">VIRT-CONT{{ substr(md5($seguro->numero_seguro), 0, 15) }}-ONL</div>
                    </div>
                    
                    <!-- Información del vehículo -->
                    
                </div>
                
                <!-- Instrucciones -->
                <div style="margin-top: 15px; font-size: 10px; text-align: center;">
                    <p>Este carnet acredita la vigencia de su seguro de Responsabilidad Civil Vehicular</p>
                    <p>En caso de accidente, presente este carnet a las autoridades competentes</p>
                </div>
                
                <!-- Pie de página -->
              
            </div>
       </td> 
            
            
            
            
            
            <td>

              
                
                <div style="text-align: center; margin-top: 20px;">
                    <!-- Marco principal del carnet -->
                    <div style="border: 2px solid #000; width: 85mm; height: 54mm; margin: 0 auto; padding: 10px;  background-color: #f9f9f9;">
                        <!-- Logo y título -->
                        <div style="text-align: center; margin-bottom: 10px;">
                            <div style="font-weight: bold; font-size: 14px; color: #003366;">ServiORIENTE</div>
                            <div style="font-size: 10px; margin-top: 3px;">SEGURO DE RESPONSABILIDAD CIVIL VEHICULAR</div>
                        </div>
                        
                        <!-- Línea divisoria -->
                        <hr style="border-top: 1px solid #000; margin: 5px 0;">
                <table>
                   <tr>
                    <td>
                        <div style="text-align: left; font-size: 9px; margin-top: 0px;">
                        <span><strong>MARCA:</strong> {{ $seguro->vehiculo->marca }}</span>
                    </div>
                        <div>
                        <span><strong>MODELO:</strong> {{ $seguro->vehiculo->modelo }}</span>  </div>
                    
                    <!-- Datos del propietario -->
                    <div style="text-align: left; font-size: 9px; margin-top: 0px;">
                        <span><strong>AÑO:</strong> {{ $seguro->vehiculo->anio }}</span>
            <span><strong>PLACA:</strong> {{ $seguro->vehiculo->placas }}</span> </div>
            <div style="text-align: left; font-size: 9px; margin-top: 0px;"><strong>COLOR:</strong> {{ $seguro->vehiculo->color }}</div>
            <div style="text-align: left; font-size: 9px; margin-top: 0px;"><strong>MOTOR:</strong> {{ $seguro->vehiculo->motor }}</div>
            <div style="text-align: left; font-size: 9px; margin-top: 0px;"><strong>CARROCERÍA:</strong> {{ $seguro->vehiculo->carroceria }}</div>
            <div style="text-align: left; font-size: 9px; margin-top: 0px;">
                <span><strong>PUESTOS:</strong> {{ $seguro->vehiculo->puesto }}</span>
            </div>
            <div style="text-align: left; font-size: 9px; margin-top: 0px;">
           
                <span><strong>USO:</strong> {{ $seguro->vehiculo->uso }}</span>
            </div>
          </td>
                <td>
                    <div style="flex: 1; text-align: center;">
                        <img src="data:image/png;base64, {!! base64_encode($codigoQr) !!} " style="margin: 0 5px 0 50px;">
                    </div></td></tr> 
                </table>        
                        <!-- Datos del contratante -->
                        
                        
               


               
                        
                        <!-- Línea divisoria -->
                        <hr style="border-top: 1px solid #000; margin: 8px 0;">
                        
                        <!-- Código de verificación -->
                        <div style="text-align: center; font-size: 10px; margin-top: 5px;">
                            <div><strong>Fecha de Expedición</strong> {{ $seguro->fecha_creacion }}</div>
                            <div><strong>Fecha de Vencimineto</strong> {{ $seguro->fecha_vencimiento }}</div>
                        
                        </div>
                        
                        <!-- Información del vehículo -->
                        
                    </div>
                    
                    <!-- Instrucciones -->
                    <div style="margin-top: 15px; font-size: 10px; text-align: center;">
                        <p>Este carnet acredita la vigencia de su seguro de Responsabilidad Civil Vehicular</p>
                        <p>En caso de accidente, presente este carnet a las autoridades competentes</p>
                    </div>
                    
                    <!-- Pie de página -->
                 
                </div></td>
    </tr>

 

</table>

<div style="margin-top: 15px; font-size: 8px; text-align: center; color: #555;">
    <p>SERVICIO Y ASISTENCIA VIAL DE ORIENTE C.A.</p>
    <p>RIF: J-12345678-9 | www.servioriente.com</p>
    <p>Teléfonos: 0412-1724006 / 0416-1234567</p>
</div>



<!-- Página 5 - Características del Vehículo -->
<div class="page-break"></div>

<div class="header">
    <div class="logo">SERVICIO Y ASISTENCIA VIAL DE ORIENTE</div>
    <div>Características Técnicas del Vehículo</div>
</div>

<div style="margin-top: 20px; padding: 0 10px;">
    <h3 style="text-align: center; margin-bottom: 15px;">CARACTERÍSTICAS DEL VEHÍCULO</h3>
    
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 15px;">
        <tr>
            <td style="width: 30%; padding: 5px; border-bottom: 1px solid #ddd;"><strong>FECHA DE EXPEDICIÓN:</strong></td>
            <td style="width: 70%; padding: 5px; border-bottom: 1px solid #ddd;">01/09/2024</td>
        </tr>
        <tr>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;"><strong>FECHA DE VENCIMIENTO:</strong></td>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;">31/08/2025</td>
        </tr>
        <tr>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;"><strong>MARCA:</strong></td>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;">{{ $seguro->vehiculo->marca }}</td>
        </tr>
        <tr>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;"><strong>MODELO:</strong></td>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;">{{ $seguro->vehiculo->modelo }}</td>
        </tr>
        <tr>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;"><strong>AÑO:</strong></td>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;">{{ $seguro->vehiculo->anio }}</td>
        </tr>
        <tr>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;"><strong>PLACA:</strong></td>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;">{{ $seguro->vehiculo->placas }}</td>
        </tr>
        <tr>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;"><strong>COLOR:</strong></td>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;">{{ $seguro->vehiculo->color }}</td>
        </tr>
        <tr>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;"><strong>SERIAL DE MOTOR:</strong></td>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;">{{ $seguro->vehiculo->motor }}</td>
        </tr>
        <tr>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;"><strong>SERIAL DE CARROCERÍA:</strong></td>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;">{{ $seguro->vehiculo->carroceria }}</td>
        </tr>
        <tr>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;"><strong>PUESTOS:</strong></td>
            <td style="padding: 5px; border-bottom: 1px solid #ddd;">{{ $seguro->vehiculo->puesto }}</td>
        </tr>
        <tr>
            <td style="padding: 5px;"><strong>USO:</strong></td>
            <td style="padding: 5px;">{{ $seguro->vehiculo->uso }}</td>
        </tr>
    </table>

    <div style="text-align: center; margin: 20px 0;">
        <p><strong>Servicio y Asistencia Vial de Oriente, C.A.</strong></p>
        <p>Oficina Principal</p>
    </div>

    <div style="font-size: 10px; text-align: justify; margin-top: 30px;">
        <p>Mediante la Gaceta Oficial de la República Bolivariana de Venezuela N° 37.529 de fecha 01/12/2003, la Superintendencia de la Actividad Aseguradora como órgano rector de la actividad aseguradora modifica la póliza de Responsabilidad Civil de Vehículo aprobada con carácter general y uniforme el 21/08/1998, publicada en la Gaceta Oficial de la República de Venezuela N° 5.234, estableciendo adecuaciones al nuevo marco jurídico (Decreto con Fuerza de Ley del Contrato de Seguro y Ley de Tránsito y Transporte Terrestre).</p>
        
        <p style="margin-top: 10px;">Adoptando al nuevo marco jurídico descrito con Fuerza de Ley del Contrato de Seguro y Ley de Tránsito y Transporte Terrestre.</p>
    </div>
</div>

<div style="margin-top: 30px; font-size: 8px; text-align: center; color: #555;">
    <p>SERVICIO Y ASISTENCIA VIAL DE ORIENTE C.A. | RIF: J-12345678-9</p>
    <p>www.servioriente.com | Teléfonos: 0412-1724006 / 0416-1234567</p>
</div>






</body>
</html>