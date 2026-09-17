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
        <div class="logo"> wwwwwGGGFFFFwwwwwwwwwwwwwwwwwwwwwwwwww wwwwwwwwwwwwwwwwwwwwVwwwwggggrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr SERIE  D {{ $seguro->numero_seguro }}</div>
        <BR><BR> <div><u> HACIENDO EL CAMINO MAS CONFIABLE Y SEGURO. RIF-J29505309-0</div>
    </div>

    <div style="position: absolute; top: -35px; left: 57%; transform: translateX(-70%);">
        <img src="{{ public_path('logo.png') }}" alt="Pagado" style="width: 620px; height: 115px;">
    </div>
    <div>Inscrita en el Registro Mercantil de la Circunscripción Judicial del Estado Lara Bajo el Tomo 20-A-Nº 47   </u></div>
  
    <table class="contract-info">
        <tr>
            <td>CONTRATO: {{ $seguro->numero_seguro }} VIGENCIA DESDE: {{ \Carbon\Carbon::parse($seguro->fecha_creacion)->locale('es')->isoFormat('LL') }}
                HASTA:  {{ \Carbon\Carbon::parse($seguro->fecha_vencimiento)->locale('es')->isoFormat('LL') }}
                ASESOR:  OFIC</td>
          
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
            <td>{{ $seguro->contratante->cedula }}</td>
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
        <td>PUESTOS:</td>
        <td>{{ $seguro->vehiculo->puesto }}</td>
        <td>USO:</td>
        <td>{{ $seguro->vehiculo->uso }}</td>
    </tr>
</table>


  
<table class="contract-info"> 
    <tr>
        <td style="text-align: center;" >GARANTIAS CONTRATADAS</td>
    </tr>
</table>





<div style="position: relative;">
    <!-- Imagen "PAGADO" flotante -->
 
    <table class="contract-info">
        <tr>
            <th width="50%">DESCRIPCIÓN</th>
            <th width="30%">MONTO DE GARANTIAS Bs.</th>
            <th width="20%">PAGO Bs.</th>
        </tr>
        <tr>
            <td>POR DAÑOS A COSAS</td>
            <td style="text-align: right;">3.000,00</td>
            <td style="text-align: right;"></td>
        </tr>
        <tr>
            <td>POR DAÑOS A PERSONAS</td>
            <td style="text-align: right;">3.000,00</td>
            <td style="text-align: right;"></td>
        </tr>
        <tr>
            <td>TOTAL RESPONSABILIDAD CIVIL</td>
            <td style="text-align: right;"></td>
            <td style="text-align: right;">{{ number_format($seguro->garantia->total, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td>ASISTENCIA LEGAL</td>
            <td style="text-align: right;">2.000,00</td>
            <td style="text-align: right;">0</td>
        </tr>

        <tr>
            <td>MUERTE A CONDUCTOR Y/O PASAJEROS</td>
            <td style="text-align: right;">2.000,00</td>
            <td style="text-align: right;"></td>
        </tr>

        <tr>
            <td>INVALIDEZ DE CONDUCTOR Y/O PASAJEROS</td>
            <td style="text-align: right;">2.000,00</td>
            <td style="text-align: right;"></td>
        </tr>

        <tr>
            <td>GASTOS MEDICOS</td>
            <td style="text-align: right;">2.000,00</td>
            <td style="text-align: right;">0</td>
        </tr>


        <tr>
            <td>ACCIDENTE A OCUPANTES Y EQUIPAJE POR PERSONA</td>
            <td style="text-align: right;"></td>
            <td style="text-align: right;">0</td>
        </tr>
        <tr>
            <td>SERVICIO DE GRUA PLAN</td>
            <td style="text-align: right;"></td>
            <td style="text-align: right;">0</td>
        </tr>

        <tr>
            <td>SISTEMA SATELITAL</td>
            <td style="text-align: right;"></td>
            <td style="text-align: right;">0</td>
        </tr>
      
        <tr>
            <td><strong>TOTAL PAGO</strong></td>
            <td></td>
            <td style="text-align: right;"><strong>{{ number_format($seguro->garantia->total, 2, ',', '.') }}</strong></td>
        
        </tr>
   
    </table>

    <div style="position: absolute; top: 160px; left: 75%; transform: translateX(-80%);">
        <img src="{{ public_path('pagado.png') }}" alt="Pagado" style="max-width: 120px; height: auto;">
    </div>

    <div class="signature-area" style="margin-top: -5px; margin-bottom: -10px;">
        <div style="float: left; width: 50%;">
            <div>FIRMA DEL CONTRATANTE</div>
            <div class="signature-line"></div>
        </div>
        <div style="float: right; width: 45%; text-align: right;">
            <div>FIRMA AUTORIZADA</div>
            <img src="{{ public_path('firma.png') }}" alt="Firma Autorizada" style="max-width: 40%; height: auto; margin-top: 5px;">
      
           
        </div>
        <div style="clear: both;"></div>
    </div>
    <table>
        <tr>
            <td>
                <div style="text-align: center; margin-top: 20px;">
                    <!-- Marco principal del carnet -->
                    <div style="border: 2px solid #000; width: 85mm; height: 54mm; margin: 0 auto; padding: 10px;  background-color: #f9f9f9;">
                        <!-- Logo y título -->
                        <div style="text-align: center; margin-bottom: 10px;">
                            <img src="{{ public_path('logo.png') }}" alt="Sello Seguro" style="width: 80%; height: auto; margin-top:0px;">
                        </div>
                        
                        <!-- Línea divisoria -->
                        <hr style="border-top: 1px solid #000; margin: 5px 0;">
                        
                        <!-- Datos del contratante -->
                        <div style="text-align: left; font-size: 9px; margin-top: 0px;">
                            <div><strong>APELLIDOS Y NOMBRES - CONTRATANTE (C.I./RIF)</strong></div>
                            <div>{{ $seguro->contratante->apellido }} {{ $seguro->contratante->nombre }} ({{ $seguro->contratante->cedula }})</div>
                        </div>
                        
                        <!-- Datos del propietario -->
                    
                        
                        <!-- Dirección -->
                        <div style="text-align: left; font-size: 9px; margin-top: 0px;">
                            <div><strong>TELEFONO:</strong> {{ $seguro->contratante->telefono }}</div>
                           
                        </div>

                        <div style="text-align: left; font-size: 9px; margin-top: 0px;">
                            <div><strong>DIRECCIÓN: </strong>{{ $seguro->contratante->direccion }}</div>
                           
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
               
                    
                    <!-- Pie de página -->
                  
                </div>
           </td> 
                
                
                
                
                
                <td>
    
                  
                    
                    <div style="text-align: center; margin-top: 20px;">
                        <!-- Marco principal del carnet -->
                        <div style="border: 2px solid #000; width: 85mm; height: 54mm; margin: 0 auto; padding: 10px;  background-color: #f9f9f9;">
                            <!-- Logo y título -->
                            <div style="text-align: center; margin-bottom: 10px;">
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
                           <div style="text-align: left; font-size: 9px; margin-top: 0px;">
                             <span><strong>MODELO:</strong> {{ $seguro->vehiculo->modelo }}</span>  </div>
                        
                        <!-- Datos del propietario -->
                        <div style="text-align: left; font-size: 9px; margin-top: 0px;">
                            <span><strong>AÑO:</strong> {{ $seguro->vehiculo->anio }}</span>
               </div>


                <div style="text-align: left; font-size: 9px; margin-top: 0px;">
                   
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
                           
                            
                            <!-- Código de verificación -->
                            <div style="text-align: center; font-size: 10px; margin-top: 5px;">
                                <div><strong>Fecha de Expedición:</strong> 
                                    {{ \Carbon\Carbon::parse($seguro->fecha_creacion)->locale('es')->isoFormat('LL') }}
                                </div>
                                <div><strong>Fecha de Vencimiento:</strong> 
                                    {{ \Carbon\Carbon::parse($seguro->fecha_vencimiento)->locale('es')->isoFormat('LL') }}
                                </div>
                            </div>
                            
                            <!-- Información del vehículo -->
                            
                        </div>
                        
                    
                        
                        <!-- Pie de página -->
                     
                    </div>
                </td>
        </tr>
    
     
    
    </table>
  
</div>
</body>
</html>