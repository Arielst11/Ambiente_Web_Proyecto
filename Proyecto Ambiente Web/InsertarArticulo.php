<!DOCTYPE html>
<html lang="en">
<head>
<?php
include_once 'Include\head.html';
?>
<title>Registrar</title>
</head>
<body>
<?php
include_once 'Include\navbar.html';
?>   

<h1> Ingresar un artículo nuevo </h1>

<form action="PHP\procesarRegistroProducto.php" method="POST" >
<div class="form-group">
    <input type="hidden" id="useless-ID" name="ID-Articulo"  value= "0">
  </div>
  <div class="form-group">
    <label for="productNameField">Ingrese el nombre del artículo</label>
    <input type="textfield" class="form-control" id="productNameField" name="Nombre-Articulo" placeholder="Ingrese el nombre del Arículo" requierd>
  </div> 
  <div class="form-group">
    <label for="descriptionField">Ingrese la descripción del artículo</label>
    <input type="textfield" class="form-control" id="descriptionField" name="Descripcion-Articulo" placeholder="Descripción" requierd>
  </div> 
  <div class="form-group">
    <label for="priceField">Ingrese el precio del producto</label>
    <input type="textfield" class="form-control" id="priceField" name="Precio-Articulo" placeholder=" ejemplo ₡15000" requierd>
  </div> 
  <div class="form-group">
    <label for="urlField">URL imagen</label>
    <input type="textfield" class="form-control" id="urlField" name="Imagen-Articulo" placeholder="ejemplo https://firebasestorage.googleapis.com/v0/b/proyecto-progra-web-c9327.appspot.com" requierd>
  </div> 
  <div class="form-group">
    <input type="hidden" id="action" name="Action-Articulo"  value= "Insert">
  </div>
  <button type="submit" class="btn btn-primary">Ingresar a la base de datos</button>
</form>



</body>
</html>