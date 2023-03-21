<?php

require_once "../DatabaseConexion\conexion.php";

function IngresarUsuario($Nombre, $Correo, $Contraseña ,$Telefono, $Direccion, $Genero)
{
    $retorno = false;
    $conexion = Conecta();
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $stmt = $conexion->prepare("Insert into usuarios (nombre, correo, contraseña, telefono, direccion, genero)
                                        values(?,?,?,?,?,?)");
        $stmt->bind_param("ssssss", $iNombre, $iCorreo, $iContraseña ,$iTelefono, $iDireccion, $iGenero);

        //set parametros y ejecutar
        $iNombre = $Nombre;
        $iCorreo = $Correo;
        $iContraseña = $Contraseña;
        $iTelefono = $Telefono;
        $iDireccion = $Direccion;
        $iGenero = $Genero;

        if($stmt->execute()){
            $retorno = true;
        }
    }

    Desconecta($conexion);

    return $retorno;
}


/*

// ESTE CODIGO SE PUEDE MODIFICAR PARA QUE EL ADMINISTRADOR BORRE O MODIFIQUE USUARIOS MAS ADELANTE.

function borrarAlumno($id){


    $retorno = false;
    $conexion = Conecta();
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $stmt = $conexion->prepare("delete from estudiantes where id = ?");
        $stmt->bind_param("s", $id);

        if($stmt->execute()){
            $retorno = true;
        }
    }
    Desconecta($conexion);

    return $retorno;
}


function muestraAlumnos(){

    $resultado;
    $conexion = Conecta();
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $resultado = $conexion->query("select id, nombre, correo, telefono from estudiantes");
        
    }
    Desconecta($conexion);

    return $resultado;
}


*/

?>