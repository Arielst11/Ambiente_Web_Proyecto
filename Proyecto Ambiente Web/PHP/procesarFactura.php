<?php



require_once "../Include\obtieneRequets.php";

$total = recogePost("Total-Factura");
session_start();
$Nombre = $_SESSION['Nombre'];
$NombreUsuario = $_SESSION['Nombreusuario'];
$Correo = $_SESSION['Correo'];
$Telefono = $_SESSION['Telefono'];
$Direccion = $_SESSION['Direccion'];
$Genero = $_SESSION['Genero'];
$Tipo = $_SESSION['Tipo'];


require_once "../Entities/Factura.php";
if(IngresarFactura($NombreUsuario, $Nombre,$Correo,$Telefono,$Direccion,$Genero,$Tipo, $total )){

echo "<script>  alert('La factura se ha generado.') </script>";
echo "<script> window.location = '../Carrito.php' </script>";

}else{
    echo "<script>  alert('La factura no se ha generado correctamente, favor tratar de nuevo.') </script>";
    echo "<script> window.location = '../Carrito.php' </script>";  
}
