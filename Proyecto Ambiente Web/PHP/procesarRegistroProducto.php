<?php
require_once "../Include\obtieneRequets.php";

$nombre = recogePost("Nombre-Producto");
$descripcion = recogePost("Descripcion-Producto");
$precio_unidad = recogePost("Precio-Producto");
$cantidad = recogePost("Cantidad-Producto");

require_once "../Include/validadatos.php";

$nombreOk = validaDatos($nombre);
$descripcionOk = validaDatos($descripcion);
$precio_unidadOk = validaDatos($precio_unidad);
$cantidadOk = validaDatos($cantidad);

if($nombreOk == false || $descripcionOk == false || $precio_unidadOk == false || $cantidadOk == false) {

    echo "<p> alguno de los elementos no fue completado </p>";
}else {
     require_once "../Entities/Producto.php";

     if (IngresarProducto($nombre, $descipcion, $precio_unidad, $cantidad)) {
        echo "<p> Procuto $nombre registrado correctamente. </p>";

     }else {
        echo "<p> Fallo al registrar el producto $nombre </p>";
     }
}

if($nombreOk == false || $descripcionOk == false || $precio_unidadOk == false || $cantidadOk == false) {

    echo "<p> alguno de los elementos no fue completado </p>";
} else {
    require_once "../Entities/Producto.php";

    if (ModificarProducto($id, $nombre, $descripcion, $precio_unidad, $cantidad)) {
        echo "<p> El producto $nombre ha sido modificado correctamente. </p>";
    } else {
        echo "<p> Error al modificar el producto $nombre. </p>";
    }
}

if($nombreOk == false || $descripcionOk == false || $precio_unidadOk == false || $cantidadOk == false) {

    echo "<p> alguno de los elementos no fue completado </p>";
} else {
    require_once "../Entities/Producto.php";

    if (EliminarProducto($id)) {
    echo "<p> El producto ha sido eliminado correctamente. </p>";
    } else {
    echo "<p> Error al eliminar el producto. </p>";
    }
}


?>