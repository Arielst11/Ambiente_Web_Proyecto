<?php
require_once "../Include\obtieneRequets.php";

$id = recogePost("ID-Articulo");
$nombre = recogePost("Nombre-Articulo");
$descripcion = recogePost("Descripcion-Articulo");
$precio = recogePost("Precio-Articulo");
$imagen = recogePost("Imagen-Articulo"); 
// variable que indica la accion que se va a realizar.
$accion = recogePost("Action-Articulo");



require_once "../Include/validadatos.php";
$idOK = validaDatos($id);
$nombreOk = validaDatos($nombre);
$descripcionOk = validaDatos($descripcion);
$precioOk = validaDatos($precio);
$imagenOK = validaDatos($imagen);
$accionOK = validaDatos($accion);



if($accion == "Insert"){

if($nombreOk == false || $descripcionOk == false || $precioOk == false || $imagenOK == false) {

    echo "<script>  alert('alguno de los elementos no fue completado') </script>";
    echo "<script> window.location = '../InsertarArticulo.php' </script>";
}else {
     require_once "../Entities/Articulo.php";

     if (IngresarArticulo($nombre, $descripcion, $precio, $imagen)) {
        echo "<script>  alert('el elemento $nombre fue ingresado correctamente') </script>";
        echo "<script> window.location = '../InsertarArticulo.php' </script>";

     }else {
        echo "<script>  alert('Fallo al registrar el producto $nombre') </script>";
        echo "<script> window.location = '../InsertarArticulo.php' </script>";
     }
}

} elseif ($accion == "Update" ){

 if($idOK == false || $nombreOk == false || $descripcionOk == false || $precioOk == false || $imagenOK == false) {

    echo "<script>  alert('alguno de los elementos no fue completado') </script>";
    echo "<script> window.location = '../ModificarArticulo.php' </script>";

} else {
    require_once "../Entities/Articulo.php";

    if (ModificarArticulo($id, $nombre, $descripcion, $precio, $imagen)) {
        echo "<script>  alert('El producto $nombre ha sido modificado correctamente.') </script>";
        echo "<script> window.location = '../ModificarArticulo.php' </script>";

    } else {
        echo "<script>  alert(' Error al modificar el producto $nombre. ') </script>";
        echo "<script> window.location = '../ModificarArticulo.php' </script>";
    }
}

} elseif ($accion == "Delete" ){

if($idOK == false) {

    echo "<script>  alert('alguno de los elementos no fue completado') </script>";
    echo "<script> window.location = '../EliminarArticulo.php' </script>";

} else {
    require_once "../Entities/Articulo.php";

    if (EliminarArticulo($id)) {
    echo "<script>  alert('El producto ha sido eliminado correctamente.') </script>";
    echo "<script> window.location = '../EliminarArticulo.php' </script>";
    } else {
    echo "<script>  alert('Error al eliminar el producto.') </script>";
    echo "<script> window.location = '../EliminarArticulo.php' </script>";
    }
}

}








?>