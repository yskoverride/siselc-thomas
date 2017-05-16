<?php

    function hv_completo($detalleUsuario){
    
        $nomcampo=array('foto'=>'Foto Personal' , 'DocExpedicion'=>'Lugar de Expedición del Documento' , 'FechaNacimiento'=>'Fecha de Nacimiento' , 'Edad'=>'Edad' , 'sexo'=>'Sexo' , 'DireccionResidencia'=>'Dirección de residencia' , 'movilPersonal'=>'Celular Personal' , 'DepartamentoResidencia'=>'Departamento de Residencia' , 'CiudadResidencia'=>'Ciudad de Residencia' , 'TelefonoResidencia'=>'Teléfono de Residencia' , 'ImagenDoc'=>'imagen fotocopia cedula' , 'NivelEducacion'=>'Nivel de Educación' , 'SoporteEducacion'=>'Soportes Educación' , 'experienciaFormal'=>'Experiencia formal' , 'experienciaSIS'=>'Experiencia en Pruebas' , 'PruebasEntreSemana'=>'Puede participar en pruebas entre semana?' , 'PruebasFueraBogota'=>'Puede participar en pruebas fuera de la ciudad?' , 'NombreRefPersonal'=>'Nombres referencia personal' , 'ApellidosRefPersonal'=>'Apellidos referencia personal' , 'direccionResidenciaRefPersonal'=>'Dirección referencia personal' , 'telefonoResidenciaRefPersonal'=>'teléfono referencia personal' , 'celularRefPersonal'=>'Celular referencia personal' , 'RecomendadoTGS'=>'Conoce una persona dentro de la compañía que lo recomiende?' , 'NombreRefEmergencia'=>'Nombres contacto de emergencias' , 'ApellidosRefEmergencia'=>'Apellidos contacto de emergencias' , 'DireccionResidenciaRefEmergencia'=>'Dirección contacto de emergencias' , 'telefonoResidenciaRefEmergencia'=>'Teléfono contacto de emergencias' , 'celularRefEmergencia'=>'Celular Contacto de Emergencias' , 'tituloEducacion'=>'Nombre del título obtenido' , 'eps'=>'EPS a la que pertenece' , 'certificadoEps'=>'Certificado EPS');                     
        $HVcompleto=0;
        $faltante= array();
        foreach ($detalleUsuario as $clave=>$valor){
            if ($clave=='foto' || $clave=='DocExpedicion' || $clave=='FechaNacimiento' || $clave=='sexo' || $clave=='DireccionResidencia' || $clave=='movilPersonal' || $clave=='DepartamentoResidencia' || $clave=='CiudadResidencia' || $clave=='TelefonoResidencia' || $clave=='ImagenDoc' || $clave=='NivelEducacion' || $clave=='SoporteEducacion' || $clave=='experienciaFormal' || $clave=='experienciaSIS' || $clave=='PruebasEntreSemana' || $clave=='PruebasFueraBogota' || $clave=='NombreRefPersonal' || $clave=='ApellidosRefPersonal' || $clave=='direccionResidenciaRefPersonal' || $clave=='telefonoResidenciaRefPersonal' || $clave=='celularRefPersonal' || $clave=='RecomendadoTGS' || $clave=='NombreRefEmergencia' || $clave=='ApellidosRefEmergencia' || $clave=='direccionResidenciaRefEmergencia' || $clave=='telefonoResidenciaRefEmergencia' || $clave=='celularRefEmergencia' || $clave=='tituloEducacion' || $clave=='eps' || $clave=='certificadoEps'){
                if (!empty($valor)){
                    $HVcompleto++;  
                }else{ 
                    array_push($faltante,$nomcampo[$clave]);           
                }               
            }
        }  
        return [$HVcompleto, $faltante];
    }

