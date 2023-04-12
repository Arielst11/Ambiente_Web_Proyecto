<?php
require_once "../Include\obtieneRequets.php";
//se toman valores del form
$loginName = recogePost("loginName");
$loginPassword = recogePost("loginPassword");


require_once "../Include/validadatos.php";
// se validan que no esten en blanco
$loginNameValidado = validaDatos($loginName);
$loginPasswordValidado = validaDatos($loginPassword);


require_once "../Entities/Usuario.php";
// se calcula si hay rows en la base de datos que tengan ese username y password
$encontrados = encuentraSesion($loginName , $loginPassword);
$rows = mysqli_fetch_array($encontrados);

// variables del usuario

if($loginNameValidado == false || $loginPasswordValidado == false) {

    echo "<script>  alert('alguno de los elementos no fue completado') </script>";
    echo "<script> window.location = '../IniciarSesion.php' </script>";
    
}elseif($rows['contar'] == 1){
    
    
    require_once "../Entities/Usuario.php";
    // se hace el select de los datos del usuario y se guardan en el arreglo datosUsuario
    $selectUsuario = datosInicioSesion($loginName , $loginPassword);
    $datosUsuario = mysqli_fetch_array($selectUsuario);  
    
    // if para asignar la variable sesion de acceso dependiendo del tipo de Usuario  "administrador" o "cliente"
    if($datosUsuario['tipo'] == 'administrador'){
        session_start();
        $_SESSION['acceso']=1; 
        $_SESSION['Nombre']= $datosUsuario['nombre'];
        $_SESSION['Nombreusuario']= $datosUsuario['nombreUsuario'];
        $_SESSION['Correo']= $datosUsuario['correo'];
        $_SESSION['Telefono']= $datosUsuario['telefono'];
        $_SESSION['Direccion']= $datosUsuario['direccion'];
        $_SESSION['Genero']= $datosUsuario['genero']; 
        $_SESSION['Tipo']= $datosUsuario['tipo'];

        echo "<script>  alert('Bienvenido Administrador $datosUsuario[nombre]') </script>";
        echo "<script> window.location = '../Index.php' </script>";    

    }elseif($datosUsuario['tipo'] == 'cliente'){
        session_start();
        $_SESSION['acceso']=2; 
        $_SESSION['Nombre']= $datosUsuario['nombre'];
        $_SESSION['Nombreusuario']= $datosUsuario['nombreUsuario'];
        $_SESSION['Correo']= $datosUsuario['correo'];
        $_SESSION['Telefono']= $datosUsuario['telefono'];
        $_SESSION['Direccion']= $datosUsuario['direccion'];
        $_SESSION['Genero']= $datosUsuario['genero'];
        $_SESSION['Tipo']= $datosUsuario['tipo'];

        echo "<script>  alert('Bienvenido Cliente $datosUsuario[nombre]') </script>";
        echo "<script> window.location = '../Index.php' </script>";  
    }else{
        echo "<script>  alert('Error con el tipo de usuario') </script>";
        echo "<script> window.location = '../IniciarSesion.php' </script>";

    }
}elseif($rows['contar'] == 0){
    echo "<script>  alert('No hay un usuario registrado con esa contraseña') </script>";
    echo "<script> window.location = '../IniciarSesion.php' </script>";

}else{
    echo "<script>  alert('No hay accion') </script>";
    echo "<script> window.location = '../IniciarSesion.php' </script>";
}



