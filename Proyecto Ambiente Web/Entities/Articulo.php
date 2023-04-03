<?php
require_once "DatabaseConexion\conexion.php";

function muestraArticulos(){

$resultado;
$conexion = Conecta();

// formato de datos utf8
if (mysqli_set_charset($conexion, "utf8")){
    $resultado = $conexion->query("select nombre, descripcion, precio, imagen from articulos");    
}
Desconecta($conexion);

return $resultado;
}


// funciones de mario modificadas

function IngresarArticulo($nombre, $descripcion, $precio, $imagen) {

    $retorno = false;
    $conexion = Conecta();

    if (mysqli_set_charset($conexion, "utf8")) {
        $stmt = $conexion->prepare("Insert into articulos
        (nombre, descipcion, precio, imagen)
        values(?,?,?,?)");

        $stmt->bind_param("ssss", $inombre, $idescripcion, $iprecio, $iimagen);

        $inombre = $nombre;
        $idescripcion = $descripcion;
        $iprecio = $precio;
        $iimagen = $imagen;

        if ($stmt -> execute()) {
            $retorno = true;
        }

    }

    Desconecta($conexion);

    return $retorno;
}


function ModificarArticulo($id, $nombre, $descripcion, $precio, $imagen) {
    $retorno = false;
    $conexion = Conecta();

    if (mysqli_set_charset($conexion, "utf8")) {
        $stmt = $conexion->prepare(" UPDATE articulos SET 
        nombre = ?, 
        descripcion = ?, 
        precio = ?, 
        imagen = ?
        WHERE id = ?");

        $stmt->bind_param("sssss", $inombre, $idescripcion, $iprecio, $iimagen, $iid);

        $inombre = $nombre;
        $idescripcion = $descripcion;
        $iprecio = $precio;
        $iimagen = $imagen;
        $iid = $id;

        if ($stmt -> execute()) {
            $retorno = true;
        }

    }

    Desconecta($conexion);

    return $retorno;
}

function EliminarArticulo($id) {
    $retorno = false;
    $conexion = Conecta();

    if (mysqli_set_charset($conexion, "utf8")) {
        $stmt = $conexion->prepare("DELETE FROM articulos WHERE id = ?");

        $stmt->bind_param("s", $iid);

        $iid = $id;

        if ($stmt -> execute()) {
            $retorno = true;
        }

    }

    Desconecta($conexion);

    return $retorno;
}





?>