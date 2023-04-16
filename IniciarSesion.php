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

<hr>

<h1> Iniciar Sesión </h1>

<form class="form-sesion" action="PHP\procesarInicioSesionUsuario.php" method="POST">
 
  <div class="form-outline mb-4">
    <input type="text" id="usernamelogin" class="form-control" name="loginName"/>
    <label class="form-label" for="usernamelogin">Ingrese su nombre de usuario</label>
  </div>

  <div class="form-outline mb-4">
    <input type="password" id="passwordlogin" class="form-control" name="loginPassword" />
    <label class="form-label" for="passwordlogin">Ingrese su contraseña</label>
  </div>
  <button type="submit" class="btn btn-primary btn-block mb-4">Ingresar</button>

  <div class="text-center">
   <p><a href="Registrar.php">Registrarse</a></p>
</div>
</form>

<?php
include_once 'Include\footer.html';
?> 

</body>
</html>