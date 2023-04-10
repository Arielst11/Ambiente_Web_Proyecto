
<?php
session_start();

if(empty($_SESSION)){
$acceso = 0;
$nombreSession = 0;   
}else{
$acceso = $_SESSION['acceso'];
$nombreSession = $_SESSION['Nombre']; 
}


 echo   "<div class='gridContainer-Nav'>";

 echo   "<img src= Images\costa-rica.png width='60px' height='60px'>";

 echo   "<p class='nav-element-brand'>Importaciones Costa Rica</p>";

 echo   "<a class='nav-element' href='index.php'>Inicio</a>";

 echo   "<a class='nav-element' href='PuntosEntrega.php'>Puntos de entrega</a>";

 echo   "<a class='nav-element' href='Registrar.php'>Registrar usuario</a>";


if($acceso == 2){
echo   "<a class='nav-element'>Carrito</a>";
}
 if($acceso == 1){
echo   "<a class='nav-element'>Manejo de usuarios</a>";
}
 if($acceso == 1){
echo   "<a class='nav-element' href='MenuArticulos.php'>Manejo de artículos</a>";
}
if($acceso == 0 ){
echo   "<a class='nav-element' href='IniciarSesion.php'>Iniciar Sesión</a>"; 
}
if($acceso == 1 || $acceso ==2 ){
echo   "<a class='nav-element' href='PHP/procesarCerrarSesionUsuario.php'>Cerrar Sesion</a>";
}
if($acceso == 1 || $acceso ==2 ){
echo   "<p class='nav-element-brand'>Bienvenido $nombreSession </p>";
}
echo   "</div>";

?>
