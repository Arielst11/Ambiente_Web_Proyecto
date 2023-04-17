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

<main>
<h1>Facturas y Entregas</h1>
<hr>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Nombre de Usuario</th>
      <th scope="col">Correo</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Dirección</th>
      <th scope="col">Genero</th>
      <th scope="col">Tipo</th>
      <th scope="col">Monto total</th>


    </tr>
  </thead>
  <tbody>

  <?php
include_once 'Entities\Factura.php';
$selectFactura = MuestraFacturas();
while ($mostrar = mysqli_fetch_array($selectFactura)){
 echo   "<tr>";
 echo   "<th scope='row'>$mostrar[id]</th>";
 echo   "<td>$mostrar[nombre]</td>";
 echo   "<td>$mostrar[nombreUsuario]</td>";
 echo   "<td>$mostrar[correo]</td>";
 echo   "<td>$mostrar[telefono]</td>";
 echo   "<td>$mostrar[direccion]</td>";
 echo   "<td>$mostrar[genero]</td>";
 echo   "<td>$mostrar[tipo]</td>";
 echo   "<td>₡$mostrar[total]</td>";
 echo   "</tr>";
}
    ?>
  </tbody>
</table>

</main>


</body>
</html>
