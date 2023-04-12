<?php

require_once "../DatabaseConexion\conexion.php";

function IngresarUsuario($NombreUsuario, $Nombre, $Correo, $Contraseña ,$Telefono, $Direccion, $Genero , $tipo)
{
    $retorno = false;
    $conexion = Conecta();
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $stmt = $conexion->prepare("Insert into usuarios (nombreUsuario, nombre, correo, contraseña, telefono, direccion, genero , tipo)
                                        values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssss", $iNombreUsuario, $iNombre, $iCorreo, $iContraseña ,$iTelefono, $iDireccion, $iGenero, $iTipo);

        //set parametros y ejecutar
        $iNombreUsuario = $NombreUsuario;
        $iNombre = $Nombre;
        $iCorreo = $Correo;
        $iContraseña = $Contraseña;
        $iTelefono = $Telefono;
        $iDireccion = $Direccion;
        $iGenero = $Genero;
        $iTipo = $tipo;

        if($stmt->execute()){
            $retorno = true;
        }
    }

    Desconecta($conexion);

    return $retorno;
}

function muestraUsuarios(){

    $resultado;
    $conexion = Conecta();
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $resultado = $conexion->query("select id, nombreUsuario, nombre, correo, contraseña, telefono, direccion, genero, tipo  from usuarios");
        
    }
    Desconecta($conexion);

    return $resultado;
}

function datosInicioSesion($username , $password){

    $resultado;
    $conexion = Conecta();
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $resultado = $conexion->query("select nombreUsuario, nombre, correo, contraseña, telefono, direccion, genero , tipo from usuarios where nombreUsuario = '$username'  && contraseña = '$password' ");  
    }
    Desconecta($conexion);
    return $resultado;

}


function encuentraSesion($username , $password){

    $resultado;
    $conexion = Conecta();

    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $resultado = $conexion->query("select count(id) as contar from usuarios where nombreUsuario = '$username'  && contraseña = '$password' ");    
    }
    Desconecta($conexion);

    return $resultado;

    
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





*/

?>