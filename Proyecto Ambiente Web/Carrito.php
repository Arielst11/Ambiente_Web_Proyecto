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


<h1>Carrito de compras</h1>
<hr>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Precio</th>
      <th scope="col">Imagen</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>

  <?php
include_once 'Entities\ArticuloCarrito.php';
$selectArticulos = muestraArticulosCarrito();
while ($mostrar = mysqli_fetch_array($selectArticulos)){
 echo   "<tr>";
 echo   "<th scope='row'>$mostrar[id]</th>";
 echo   "<td>$mostrar[nombre]</td>";
 echo   "<td>$mostrar[descripcion]</td>";
 echo   "<td>₡$mostrar[precio]</td>";
 echo   "<td><img width='30px'src=$mostrar[imagen] alt=''></td>";
 echo   "<td>
<form action='PHP\procesarArticuloCarrito.php' method='POST'>
<input type='hidden' id='idbuscar' name='idParaBuscar' value='$mostrar[id]'>
<input type='hidden' id='accionCarrito' name='action' value='Delete'>
<button type='submit'><img width='30px'src='Images/trash.png' alt=''></button>
 </form>
 </td>";
 echo   "</tr>";
}
    ?>
  </tbody>
</table>

<h2>Total a Pagar: </h2>
<?php
include_once 'Entities\ArticuloCarrito.php';
$total = PrecioCarrito() ;
$mostrar = mysqli_fetch_array($total);
echo '<h2>';
echo "₡ $mostrar[total]";
echo '</h2>';

echo "<h2>Confirmar compra: </h2>";
echo "<form action='PHP\procesarFactura.php' method='POST'>";
echo "<input name='Total-Factura' value = $mostrar[total] hidden >";
echo "<button type='submit'><img src='Images/verified.png' heigh='50px' width='50px'> </button>";
echo "</form>";

?>

</body>
</html>