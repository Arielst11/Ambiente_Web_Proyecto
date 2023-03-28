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



?>