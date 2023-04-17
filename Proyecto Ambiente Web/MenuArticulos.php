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

<h1>Manejo de Artículos </h1>
<hr>


<div class="gridcontainer-submenu-articulos">
  <div class="submenu-articulo">
    <h2>Insertar</h2> 
    <a href="InsertarArticulo.php">
      <img src="Images/order.png" alt="Insertar Artículo">
    </a> 
  </div>

  <div class="submenu-articulo">
    <h2>Modificar</h2> 
    <a href="ModificarArticulo.php">
      <img src="Images/edit.png" alt="Modificar Artículo">
    </a> 
  </div>

  <div class="submenu-articulo">
    <h2>Eliminar</h2> 
    <a href="EliminarArticulo.php">
      <img src="Images/trash.png" alt="Eliminar Artículo">
    </a> 
  </div>
</div>

</main>

<footer>
<?php
include_once 'Include\footer.html';

?>
</footer>

</body>




</html>
