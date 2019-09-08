<?php
require 'config/config.php';
$objUsuario =  new Usuario();
$reg = $objUsuario->listarUsuario();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Document</title>
  <link href="https://file.myfontastic.com/W6y6DTyvDLS4t2WTkLaSyQ/icons.css" rel="stylesheet">
  <style media="screen">
    .enlace_pregunta{
      cursor: pointer;
      color: #fffffa;
      font-size: 18px;
      margin-left: 5px;
      margin-right: 15px;
    }

    body{
        background-color: #fffffa;
    }

  </style>

</head>
<body>
  <div class="header">
    <span class="header-logo">
      <img src="img/logo2.png" alt="" width="90" height="90">
    </span>
    <span id="icon-menu" class="icon-menu"></span>
    <div class="text-center">
      <p class="vida">Tu perfil</p><br>
      <img src="img/logo2.png" style="border-radius:50%" width="100px" height="100px">
      <p style="width:100%" class="userNombre vida"><?php echo $reg['username'] ?></p>
    </div>
  </div>
  <nav id="nav" class="nav">
    <ul class="menu">
      <center><li class="menu_link"><a href="index.php"><span class="icon-home"></span> INICIO</a></li></center>
      <center><li class="menu_link"><a href="search.php"><span class="icon-search"></span> BUSCAR</a></li></center>
      <center><li class="menu_link"><a href="contacto.php"><span class="icon-user"></span> CONTACTO</a></li></center>
      <center><li class="menu_link"><a href="logout.php"><span class="icon-salir"></span> SALIR</a></li></center>
    </ul>
  </nav>

  <!-- seccion datos -->

  <div class="container" style="margin-top:40px;">
    <span class="text-muted nombreUsuario" style="font-size:20px;">Nombre:</span><span style="float:right; font-size:20px;"><?php echo $reg['name'] ?></span><br>
    <hr>
    <span class="text-muted nombreUsuario" style="font-size:20px;">Apellido:</span><span style="float:right; font-size:20px;"><?php echo $reg['lastname']; ?></span><br>
    <hr>
    <span class="text-muted nombreUsuario" style="font-size:20px;">Email:</span><span style="float:right; font-size:20px;"><?php echo $reg['email']; ?></span><br>
    <div class="botonera" style="margin-top:80px;">
      <a href="formModificarUsuario.php" class="btn btn-secondary">Configuración</a>
      <a href="logout.php" class="btn btn-warning">Cerrar sesión</a>
    </div>
  </div>
</body>
<?php include 'includes/foot.html' ?>
