<!DOCTYPE html>
<html lang="en">
<head>
<?php
include_once 'Include\head.html';
?>
<title>home</title>
</head>
<body>
<?php
include_once 'Include\navbar.php';
?>


<h1>Elementos en venta </h1>
<hr>
<div class="gridcontainer-Items">

<?php
include_once 'Entities\Articulo.php';
$selectArticulos = muestraArticulos();

while ($mostrar = mysqli_fetch_array($selectArticulos)){

echo "<form action='PHP\procesarArticuloCarrito.php' method='POST'>";
echo "<div class='card cardItem'>";
echo  "<input type='hidden' id='idbuscar' name='idParaBuscar' value='$mostrar[id]'>";
echo  "<input type='hidden' id='accionCarrito' name='action' value='Insert'>";
echo "<h5 class='card-title'>$mostrar[nombre] </h5>";
echo "<img width='200px'src=$mostrar[imagen] alt=''>";
echo  "<div class='card-body'>";
echo  "<p class='card-text'>$mostrar[descripcion]</p>";
echo  "<p class='card-text'>$mostrar[precio]</p>";
if($acceso == 2 || $acceso == 1){
echo  "<button type='submit' class='btn btn-primary'>Agregar al carrito</button>";    
}
echo  "</div>"; 
echo  "</div>";  
echo "</form>";
}

?>


</div>
</body>




</html>