<?php
session_start();

echo "<script>  alert('sesión de $_SESSION[Nombre] finalizada') </script>";
session_destroy();
echo "<script> window.location = '../Index.php' </script>";
