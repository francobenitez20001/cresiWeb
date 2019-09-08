<?php
// namespace Cresi;
require 'config/config.php';
//require dirname( __FILE__ ) . '/bootstrap.php';
// validate_session();

if ( ! isset( $_SESSION['vidas'] ) ) {
  $_SESSION['vidas'] = 3;
}
$vidas = isset( $_SESSION['vidas'] ) ? $_SESSION['vidas'] : 0;


if ( !isset( $_SESSION['correctas'] ) ) {
  $_SESSION['correctas'][]=null;                 //array de resp. correctas
}
$correctas = isset($_SESSION['correctas']) ? $_SESSION['correctas'] : 0;

if ( !isset( $_SESSION['incorrectas'] ) ) {
    $_SESSION['incorrectas'][]=null;                 //array de resp. correctas
}
$incorrectas = isset($_SESSION['incorrectas']) ? $_SESSION['incorrectas'] : 0;


	if ( ! isset( $_SESSION['c'] ) ) {			//indice del array
	  $_SESSION['c'] = 0;
}

$objPregunta = new Pregunta();
$reg = $objPregunta->preguntaJuego(); //array on
$respuesta_correcta = $reg['respuestaCorrecta'];
switch (rand(1,4))
{
  case 1:
  $opcion1 = $reg['respuesta1'];
  $opcion2 = $reg['respuesta2'];
  $opcion3 = $reg['respuesta3'];
  $opcion4 = $respuesta_correcta;
  break;
  case 2:
  $opcion1 = $reg['respuesta1'];
  $opcion2 = $reg['respuesta2'];
  $opcion3 = $respuesta_correcta;
  $opcion4 = $reg['respuesta3'];
  break;
  case 3:
  $opcion1 = $reg['respuesta1'];
  $opcion2 = $respuesta_correcta;
  $opcion3 = $reg['respuesta2'];
  $opcion4 = $reg['respuesta3'];
  break;
  case 4:
  $opcion1 = $respuesta_correcta;
  $opcion2 = $reg['respuesta1'];
  $opcion3 = $reg['respuesta2'];
  $opcion4 = $reg['respuesta3'];
  break;
}
$id_pregunta = $reg['idpregunta'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="img/logo.png">
  <title>CrESI APP</title>
  <link href="https://file.myfontastic.com/W6y6DTyvDLS4t2WTkLaSyQ/icons.css" rel="stylesheet">
</head>

<body class="body-pregunta">
  <div class="header">
    <span class="header-logo">
      <img src="img/logo2.png" alt="" width="90" height="90">
    </span>
    <span id="icon-menu" class="icon-menu"></span>
    <div class="text-center">
      <p class="vida">Vidas: <span id="vidas"><?php echo $vidas; ?></span></p>
      <p class="contadorPregunta" style="margin-left:90px;">Correctas: <span><?php echo $correctas; ?></span></p>
      <p class="contadorPregunta">Incorrectas: <span><?php echo $incorrectas; ?></span></p>
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
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  			js = d.createElement(s); js.id = id;
  			js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.1';
  			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

  <div class="pregunta">
    <div class="jumbotron mt-4">
      <h3 class="texto_pregunta"><?php echo $reg['pregunta']; ?></h3>
    </div>
  </div>


  <div class="opciones list-group">
    <br>
    <a class=" btn-opcion list-group-item ml-2 mr-2 mt-2" onclick="Respuesta('<?php echo $opcion1; ?>', '<?php echo $respuesta_correcta; ?>', '<?php echo $id_pregunta;?>')"><?php echo $opcion1; ?></a>
    <br>

    <a class=" btn-opcion list-group-item ml-2 mr-2 mt-2" onclick="Respuesta('<?php echo $opcion2; ?>', '<?php echo $respuesta_correcta; ?>', '<?php echo $id_pregunta;?>')"><?php echo $opcion2; ?></a>
    <br>

    <a class=" btn-opcion list-group-item ml-2 mr-2 mt-2" onclick="Respuesta('<?php echo $opcion3; ?>', '<?php echo $respuesta_correcta; ?>', '<?php echo $id_pregunta;?>')"><?php echo $opcion3; ?></a>
    <br>

    <a class=" btn-opcion list-group-item ml-2 mr-2 mt-2" onclick="Respuesta('<?php echo $opcion4; ?>', '<?php echo $respuesta_correcta; ?>', '<?php echo $id_pregunta;?>')"><?php echo $opcion4; ?></a>
    <br>
  </div>
  <div class="reloj">
    <p class="cont h3" id="contador">15</p>
  </div>

  <center>
  <a href="https://m.facebook.com/cresiApp"><img src="img/fb.png" width="30" height="30" alt="facebook"></a>

  <a href="https://instagram.com/appcresi?utm_source=ig_profile_share&igshid=1bga34dmw1krm"><img src="img/ig.png" width="35" height="35" alt="instagram"></a>


	<div class="fb-share-button" data-href="Http://cresi.d4g.online" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=Http%3A%2F%2Fcresi.d4g.online%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
</center>
<?php include 'includes/foot.html'; ?>
<script src="js/preguntas.js" charset="utf-8"></script>
<script src="js/temporizador.js" charset="utf-8"></script>

</body>
</html>
