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


<h1>Borrar artículos</h1>
<hr>

<form action="PHP\procesarRegistroProducto.php" method="POST" >

  <div class="form-group">
    <label for="productID">Ingrese el ID del artículo a Borrar</label>
    <input type="number" class="form-control" id="productID" name="ID-Articulo" placeholder="ingrese un ID valido de la lista" requierd >
  </div>
  <div class="form-group">
    <input type="hidden" id="action" name="Action-Articulo"  value= "Delete">
  </div>
  <button type="submit" class="btn btn-primary">Borrar</button>
</form>
<hr>

<h2 class="titulo-modificar">Lista de artículos disponibles en la base de datos</h1>
<hr>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Precio</th>
      <th scope="col">Imagen</th>
      <th scope="col">Imagen URL</th>
    </tr>
  </thead>
  <tbody>

  <?php
include_once 'Entities\Articulo.php';
$selectArticulos = muestraArticulos();
while ($mostrar = mysqli_fetch_array($selectArticulos)){
 echo   "<tr>";
 echo   "<th scope='row'>$mostrar[id]</th>";
 echo   "<td>$mostrar[nombre]</td>";
 echo   "<td>$mostrar[descripcion]</td>";
 echo   "<td>$mostrar[precio]</td>";
 echo   "<td><img width='30px'src=$mostrar[imagen] alt=''></td>";
 echo   "<td>$mostrar[imagen]</td>";
 echo   "</tr>";
}
    ?>
  </tbody>
</table>





</body>
</html>