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
include_once 'Include\navbar.php';
?>   

<h1> Registre su usuario </h1>

<form class="form-registrar" action="PHP\procesarRegistroUsuario.php" method="POST" >
  <div class="form-group">
    <label for="emailField">Correo electrónico</label>
    <input type="email" class="form-control" id="emailField" name="correo"aria-describedby="emailHelp" placeholder="ingrese su email" requierd>
    <small id="emailHelp" class="form-text text-muted">Su correo no será compartido con nadie.</small>
  </div>
  <div class="form-group">
    <label for="userloginNameField">Ingrese su nombre de usuario </label>
    <input type="textfield" class="form-control" id="userloginNameField" name="Nombre-Usuario-login" placeholder="ejemplo Ast11 " requierd>
  </div> 
  <div class="form-group">
    <label for="passwordField">Contraseña</label>
    <input type="password" class="form-control" id="passwordField" name="contraseña1" placeholder="Ingrese una contraseña" requierd>
  </div>
  <div class="form-group">
    <label for="passwordField2">Repita su contraseña</label>
    <input type="password" class="form-control" id="passwordField2" name="contraseña2" placeholder="repita su contraseña" requierd>
  </div>
  <div class="form-group">
    <label for="userNameField">Ingrese su nombre</label>
    <input type="textfield" class="form-control" id="userNameField" name="Nombre-Usuario" placeholder="ingrese su nombre" requierd>
  </div> 
  <div class="form-group">
    <label for="Telephone">Ingrese su teléfono</label>
    <input type="number" class="form-control" id="Telephone" name="Telefono-Usuario" placeholder="ingrese su telefono sin guiones" requierd>
  </div>
  <div class="form-group">
    <label for="userAddress">Ingrese su dirección donde actualmente vive</label>
    <input type="textfield" class="form-control" id="userAddress" name="Direccion-Usuario" placeholder="Ejemplo :  San José, Goicohechea, Residencial ... , casa # 20" requierd>
  </div> 
  <div class="form-check">
    <label class="form-check-label" for="Radio1">Hombre</label>
    <input type="radio" class="form-check-input" id="Radio1" name="genero" value="Hombre">
    <label class="form-check-label" for="Radio2">Mujer</label>
    <input type="radio" class="form-check-input" id="Radio2" name="genero" value="Mujer" >
  </div>
  <div class="form-group">
    <input type="hidden" id="tipo" name="Tipo-Usuario"  value= "cliente">
  </div>
  <div class="form-group">
    <input type="hidden" id="action" name="Action-Usuario"  value= "Insert">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>



</body>
</html>