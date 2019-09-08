<?php
    require 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="ionicons/css/ionicons.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos.css">
  <link rel="shortcut icon" href="img/logo.png">
	<title>CrESI APP</title>
  <style media="screen">
  body{
    background-color: #3e8cee;
  }
  </style>
</head>
	<body>
		<div class="inicio" id="inicio">
			<center><img src="img/logo2.png"  class="logo" alt="" width="250" height="250"></center>
			<div class="botonera">
				<a class="icon-enlace"href="contacto.php"><button class="arriba1"><span class="icono icon ion-android-mail">
				<a class="icon-enlace" target="_blank" href="http://cresi.com.ar/esi/quienes-somos/"><button class="arriba2"><span class="icono icon ion-information"></button></a>
				<br>
				<a class="icon-enlace "href="search.php"><button class="abajo1"><span class="icon ion-android-search"></button></a>
				<a class="icon-enlace "href="profile.php"><button class="abajo2"><span class="icon ion-android-contact"></button></a>
			</div>
			<a class="icon-enlace "href="ruleta.php"><center><button type="button" name="button" class="centro"><span class="icono icon ion-play"></span></button></center></a>
		</div>
	</body>
</html>
