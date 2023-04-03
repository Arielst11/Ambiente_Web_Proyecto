<?php
require_once "../DatabaseConexion\conexion.php";

function IngresarProducto($nombre, $descripcion, $precio_unidad, $cantidad) {

    $retorno = false;
    $conexion = Conecta();

    if (mysqli_set_charset($conexion, "utf8")) {
        $stmt = $conexion->prepare("Insert into productos
        (nombre, descipcion, precio_unidad, cantidad)
        values(?,?,?,?");

        $stmt->bind_param("ssii", $inombre, $idescripcion, $iprecio_unidad, $icantidad);

        $inombre = $nombre;
        $idescripcion = $descripcion;
        $iprecio_unidad = $precio_unidad;
        $icantidad = $cantidad;

        if ($stmt -> execute()) {
            $retorno = true;
        }

    }

    Desconecta($conexion);

    return $retorno;
}


function ModificarProducto($id, $nombre, $descripcion, $precio_unidad, $cantidad) {
    $retorno = false;
    $conexion = Conecta();

    if (mysqli_set_charset($conexion, "utf8")) {
        $stmt = $conexion->prepare("UPDATE productos SET 
        nombre = ?, 
        descripcion = ?, 
        precio_unidad = ?, 
        cantidad = ?
        WHERE id = ?");

        $stmt->bind_param("ssiii", $inombre, $idescripcion, $iprecio_unidad, $icantidad, $iid);

        $inombre = $nombre;
        $idescripcion = $descripcion;
        $iprecio_unidad = $precio_unidad;
        $icantidad = $cantidad;
        $iid = $id;

        if ($stmt -> execute()) {
            $retorno = true;
        }

    }

    Desconecta($conexion);

    return $retorno;
}

function EliminarProducto($id) {
    $retorno = false;
    $conexion = Conecta();

    if (mysqli_set_charset($conexion, "utf8")) {
        $stmt = $conexion->prepare("DELETE FROM productos WHERE id = ?");

        $stmt->bind_param("i", $iid);

        $iid = $id;

        if ($stmt -> execute()) {
            $retorno = true;
        }

    }

    Desconecta($conexion);

    return $retorno;
}


?>