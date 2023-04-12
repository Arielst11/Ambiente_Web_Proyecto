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


<h1>Modificar artículos</h1>
<hr>

<form action="PHP\procesarRegistroProducto.php" method="POST" >

  <div class="form-group">
    <label for="productID">Ingrese el ID del artículo a modificar</label>
    <input type="number" class="form-control" id="productID" name="ID-Articulo" placeholder="ingrese un ID valido de la lista" requierd >
  </div>
  <div class="form-group">
    <label for="productNameField">Ingrese el nombre del artículo</label>
    <input type="textfield" class="form-control" id="productNameField" name="Nombre-Articulo" placeholder="Ingrese el nombre del Arículo" requierd>
  </div> 
  <div class="form-group">
    <label for="descriptionField">Ingrese la descripción del artículo</label>
    <input type="textfield" class="form-control" id="descriptionField" name="Descripcion-Articulo" placeholder="Nueva Descripción" requierd>
  </div> 
  <div class="form-group">
    <label for="priceField">Ingrese el precio del producto</label>
    <input type="number" class="form-control" id="priceField" name="Precio-Articulo" placeholder=" nuevo precio ejemplo ₡15000" requierd>
  </div> 
  <div class="form-group">
    <label for="urlField">URL imagen</label>
    <input type="textfield" class="form-control" id="urlField" name="Imagen-Articulo" placeholder="ejemplo https://firebasestorage.googleapis.com/v0/b/proyecto-progra-web-c9327.appspot.com" requierd>
  </div> 
  <div class="form-group">
    <input type="hidden" id="action" name="Action-Articulo"  value= "Update">
  </div>
  <button type="submit" class="btn btn-primary">Modificar</button>
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