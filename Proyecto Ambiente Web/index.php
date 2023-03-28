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
include_once 'Include\navbar.html';
?>


<h1>Elementos en venta </h1>
<hr>
<div class="gridcontainer-Items">

<?php
include_once 'Entities\Articulo.php';
$selectArticulos = muestraArticulos();

while ($mostrar = mysqli_fetch_array($selectArticulos)){

echo "<div class='card cardItem'>";
echo "<h5 class='card-title'>$mostrar[nombre] </h5>";
echo "<img width='200px'src=$mostrar[imagen] alt=''>";
echo  "<div class='card-body'>";
echo  "<p class='card-text'>$mostrar[descripcion]</p>";
echo  "<p class='card-text'>$mostrar[precio]</p>";
echo  "<a href='' class='btn btn-primary'>Agregar al carrito</a>";
echo  "</div>"; 
echo  "</div>";  
}

?>


</div>
</body>




</html>