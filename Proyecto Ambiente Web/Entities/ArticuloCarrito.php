<?php


function muestraArticulosCarrito(){
require_once "DatabaseConexion\conexion.php";
$resultado;
$conexion = Conecta();

// formato de datos utf8
if (mysqli_set_charset($conexion, "utf8")){
    $resultado = $conexion->query("select id, nombre, descripcion, precio, imagen from carrito");    
}
Desconecta($conexion);

return $resultado;
}


function IngresarArticuloCarrito($ID) {

    require_once "../DatabaseConexion\conexion.php";
    $retorno = false;
    $conexion = Conecta();
    $rowArticulo;
    if (mysqli_set_charset($conexion, "utf8")){
        $rowArticulo = $conexion->query("select nombre, descripcion, precio, imagen from articulos where id = '$ID'");    
    }
    Desconecta($conexion);
   
    $datosArticulo = mysqli_fetch_array($rowArticulo);  

    $nombre = $datosArticulo['nombre'];
    $descripcion = $datosArticulo['descripcion'];
    $precio = $datosArticulo['precio'];
    $imagen = $datosArticulo['imagen'];
    


    $conexion = Conecta();

    if (mysqli_set_charset($conexion, "utf8")) {
        $stmt = $conexion->prepare("Insert into carrito
        (nombre, descripcion, precio, imagen)
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



function EliminarArticuloCarrito($id) {
    require_once "../DatabaseConexion\conexion.php";
    $retorno = false;
    $conexion = Conecta();

    if (mysqli_set_charset($conexion, "utf8")) {
        $stmt = $conexion->prepare("DELETE FROM carrito WHERE id = ?");

        $stmt->bind_param("s", $iid);

        $iid = $id;

        if ($stmt -> execute()) {
            $retorno = true;
        }

    }

    Desconecta($conexion);

    return $retorno;
}

function CerrarCarrito() {

require_once "../DatabaseConexion\conexion.php";
$conexion = Conecta();

// formato de datos utf8
if (mysqli_set_charset($conexion, "utf8")){
    $resultado = $conexion->query("delete from carrito");    
}
Desconecta($conexion);

}



?>