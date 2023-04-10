<?php
require_once "../Include\obtieneRequets.php";
//se toman valores del form
$ID = recogePost("idParaBuscar");
$Accion = recogePost("action");



if($Accion == "Insert"){

    
         require_once "../Entities/ArticuloCarrito.php";
    
         if (IngresarArticuloCarrito($ID)) {
            echo "<script>  alert('el elemento fue ingresado correctamente al carrito') </script>";
            echo "<script> window.location = '../Index.php' </script>";
    
         }else {
            echo "<script>  alert('Fallo al ingresar el artículo al carrito') </script>";
            echo "<script> window.location = '../Index.php' </script>";
         }
    }
    
    
    elseif ($Accion == "Delete" ){
    
        require_once "../Entities/ArticuloCarrito.php";
    
        if (EliminarArticuloCarrito($ID)) {
            echo "<script>  alert('el elemento fue eliminado correctamente del carrito') </script>";
            echo "<script> window.location = '../Carrito.php' </script>"; 
        } else {
            echo "<script>  alert('el elemento no fue eliminado correctamente del carrito') </script>";
            echo "<script> window.location = '../Carrito.php' </script>"; 
        }
    }
    
    