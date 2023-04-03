<?php
require_once "../Include\obtieneRequets.php";

$id = recogePost("ID-Articulo");
$nombre = recogePost("Nombre-Articulo");
$descripcion = recogePost("Descripcion-Articulo");
$precio = recogePost("Precio-Articulo");
$imagen = recogePost("Imagen-Articulo");
// variable que indica la accion que se va a realizar.
$accion = recogePost("Accion-Articulo");



require_once "../Include/validadatos.php";
$idOK = validaDatos($id);
$nombreOk = validaDatos($nombre);
$descripcionOk = validaDatos($descripcion);
$precioOk = validaDatos($precio);
$imagenOK = validaDatos($imagen);
$accionOK = validaDatos($accion);



if($accion == "Insert"){

if($nombreOk == false || $descripcionOk == false || $precioOk == false || $imagenOk == false) {

    echo "<p> alguno de los elementos no fue completado </p>";
}else {
     require_once "../Entities/Articulo.php";

     if (IngresarArticulo($nombre, $descipcion, $precio, $imagen)) {
        echo "<p> Procuto $nombre fue registrado correctamente. </p>";

     }else {
        echo "<p> Fallo al registrar el producto $nombre </p>";
     }
}

} elseif ($accion == "Update" ){

 if($idOK == false || $nombreOk == false || $descripcionOk == false || $precioOk == false || $imagenOk == false) {

    echo "<p> alguno de los elementos no fue completado </p>";
} else {
    require_once "../Entities/Articulo.php";

    if (ModificarArticulo($id, $nombre, $descripcion, $precio, $imagen)) {
        echo "<p> El producto $nombre ha sido modificado correctamente. </p>";
    } else {
        echo "<p> Error al modificar el producto $nombre. </p>";
    }
}

} elseif ($accion == "Delete" ){

if($idOK == false) {

    echo "<p> alguno de los elementos no fue completado </p>";
} else {
    require_once "../Entities/Articulo.php";

    if (EliminarAriticulo($id)) {
    echo "<p> El producto ha sido eliminado correctamente. </p>";
    } else {
    echo "<p> Error al eliminar el producto. </p>";
    }
}

}








?>