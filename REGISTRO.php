<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Formulario Compra</title>
</head>
<body>
  <form action="conect.php" method="post">
  <section class="form-register">
    <h4><center>Datos de Usuario</center></h4>

    <input class="controls" type="text" name="firthName" id="firthName" placeholder="Ingrese su Nombre">

    <input class="controls" type="text" name="lastName" id="lastName" placeholder="Ingrese su Apellido">

    <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">

    <input class="controls" type="date" name="date" id="date" placeholder="Ingrese su Fecha de Nacimiento">

    <input class="controls" type="number" name="number" id="number" placeholder="Ingrese su numero telefonico">


    <input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su Contraseña">

   </form>
   <?php
    if(isset($_POST['firthName']) &&isset($_POST['lastName']) && isset($_POST['correo']) && isset($_POST['date']) && isset($_POST['number']) && isset($_POST['contraseña']))
      require_once"conectado.php";


   ?>
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    
    <p><a class="botons" type="submit" href="LOGIN.php"  >REGISTRAR </a></p>
    <p><a href="#">¿Ya tengo Cuenta?</a></p>
  </section>

</body>
</html>