<?php
session_start();
echo "<script>  alert('la session actual es de $_SESSION[Nombre]') </script>";

session_destroy();
echo "<script>  alert('sesión finalizada') </script>";
echo "<script> window.location = '../Index.php' </script>";
