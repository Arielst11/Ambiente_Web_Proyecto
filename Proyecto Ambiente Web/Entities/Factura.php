<?php



function IngresarFactura($NombreUsuario, $Nombre, $Correo ,$Telefono, $Direccion, $Genero , $tipo , $total)
{require_once "../DatabaseConexion\conexion.php";
    $retorno = false;
    $conexion = Conecta();
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $stmt = $conexion->prepare("Insert into factura (nombreUsuario, nombre, correo, telefono, direccion, genero ,tipo ,total)
                                        values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssss", $iNombreUsuario, $iNombre, $iCorreo,$iTelefono, $iDireccion, $iGenero, $iTipo, $iTotal );

        //set parametros y ejecutar
        $iNombreUsuario = $NombreUsuario;
        $iNombre = $Nombre;
        $iCorreo = $Correo;
        $iTelefono = $Telefono;
        $iDireccion = $Direccion;
        $iGenero = $Genero;
        $iTipo = $tipo;
        $iTotal = $total;

        if($stmt->execute()){
            $retorno = true;
        }
    }

    Desconecta($conexion);

    return $retorno;
}

function MuestraFacturas(){
 require_once "DatabaseConexion\conexion.php";   
    $resultado;
    $conexion = Conecta();
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $resultado = $conexion->query("select id, nombreUsuario, nombre, correo, telefono, direccion, genero, tipo, total  from factura");
        
    }
    Desconecta($conexion);

    return $resultado;
}



