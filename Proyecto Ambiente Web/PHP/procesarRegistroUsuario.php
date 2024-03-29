<?php
require_once "../Include\obtieneRequets.php";

// assigna, verefica y da formato ,  método del profe
$nombre = recogePost("Nombre-Usuario");
$nombreUsuario = recogePost("Nombre-Usuario-login");
$correo = recogePost("correo");
$contra1 = recogePost("contraseña1");
$contra2 = recogePost("contraseña2");
$telefono = recogePost("Telefono-Usuario");
$direccion = recogePost("Direccion-Usuario");
$genero = recogePost("genero");
$tipo = recogePost("Tipo-Usuario"); 

// variable que indica la accion que se va a realizar.
$accion = recogePost("Action-Usuario");
// verifica que los datos no estan vacios, para no agregar strings vacios en la tabla de bases de datos.

require_once "../Include/validadatos.php";

$nombreValidado = validaDatos($nombre);
$nombreUsuarioValidado = validaDatos($nombreUsuario);
$correoValidado = validaDatos($correo);
$contra1Validado = validaDatos($contra1);
$contra2Validado = validaDatos($contra2);
$telefonoValidado = validaDatos($telefono);
$direccionValidado = validaDatos($direccion);
$generoValidado = validaDatos($genero);
$accionValidado = validaDatos($accion);



// si la accion es Insert
if($accionValidado == 'Insert'){

// mostrar confirmacion o resultado de datos antes de ingresar a base de datos
if($nombreValidado == false || $correoValidado == false || $contra1Validado == false || $contra2Validado == false || $telefonoValidado == false || $direccionValidado == false || $generoValidado == false || $nombreUsuarioValidado == false){
   // echo "<p>alguno de los elementos no fue completado </p>";  cambiar por pagina basica 
    echo "<script>  alert('alguno de los elementos no fue completado') </script>";
    echo "<script> window.location = '../Registrar.php' </script>";
   
} elseif ($contra1 != $contra2){
   // echo "<p> las contraseñas son diferentes </p>";  cambiar por pagina basica
   echo "<script>  alert('las contraseñas son diferentes') </script>";
   echo "<script> window.location = '../Registrar.php' </script>";
}else {
    require_once "../Entities/Usuario.php";

    if(IngresarUsuario($nombreUsuario, $nombre, $correo, $contra1, $telefono, $direccion, $genero, $tipo )){
       //  echo "<p> Usuario $nombre registrado correctamente. </p>"; cambiar por pagina basica
        
        echo "<script>  alert('Usuario $nombre registrado correctamente.') </script>";
        echo "<script> window.location = '../Registrar.php' </script>";
        
    }else{
      //  echo "<p> fallo al registrar el usuario $nombre </p>";  cambiar por pagina basica
      echo "<script>  alert('fallo al registrar el usuario $nombre') </script>";
      echo "<script> window.location = '../Registrar.php' </script>";
    }

}

} else {
  echo "<script>  alert('la accion no se pudo obtener') </script>";
}


