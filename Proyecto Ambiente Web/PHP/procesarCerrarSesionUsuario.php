<?php
session_start();

echo "<script>  alert('sesión de $_SESSION[Nombre] finalizada') </script>";
session_destroy();

require_once "../Entities/ArticuloCarrito.php";
CerrarCarrito();

echo "<script> window.location = '../Index.php' </script>";
