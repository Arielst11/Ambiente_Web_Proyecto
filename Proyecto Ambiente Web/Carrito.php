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
 echo   "<td>$mostrar[precio]</td>";
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





</body>
</html>