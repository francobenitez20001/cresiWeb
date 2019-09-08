<?php
//namespace Cresi;
require 'config/config.php';
//require dirname( __FILE__ ) . '/bootstrap.php';
//validate_session();

$_SESSION['vidas']--;
$_SESSION['incorrectas']++;

if ( $_SESSION['vidas'] === 0 ) {
  unset( $_SESSION['vidas'] );
  header('Location:perdiste.html');
}
$objPregunta = new Pregunta();
$pregunta = $objPregunta->verPreguntaPorId();
include 'includes/header.html';
?>
  <div class="respuesta">
    <p class="incorrecto text-center">INCORRECTO</p>
  </div>
<center>
  <div class="masinfo">
    <p class="text-center text-justify"><?php echo $pregunta['masInformacion'] ?></p>
  </div>
</center>
<a href="formReportarPregunta.php?id=<?php echo $pregunta['idpregunta'] ?>" class="reportar">Reportar pregunta</a><br><br>
<center><a class="btn btn-primary boton" href="ruleta.php">Continuar</a></center>
<script src="js/menu.js" charset="utf-8"></script>
</body>
</html>
