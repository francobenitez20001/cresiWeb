<?php
//namespace Cresi;
//require dirname( __FILE__ ) . '/bootstrap.php';
require 'config/config.php';
$_SESSION['correctas']++;
// $_SESSION['correctas'][$i] = $id_pregunta;        //terminar contador de respuestas correctas respondidas
//if ( isset( $_GET['id'] ) ) {
  //$user = User::getLoggedUser( db() );
   //$user->addProgress( $_GET['id'] );
//}
$objPregunta = new Pregunta();
$pregunta = $objPregunta->verPreguntaPorId();
include 'includes/header.html';
?>

  <div class="respuesta">
    <p class="correcto text-center">Correcto</p>
  </div>
  <center>
    <div class="masinfo">
      <p class="text-center text-justify"><?php echo $pregunta['masInformacion']; ?></p>
    </div>
  </center>
  <a href="formReportarPregunta.php?id=<?php echo $pregunta['idpregunta'] ?>" class="reportar">Reportar pregunta</a><br><br>
  <center><a class="btn btn-primary boton" href="ruleta.php">Continuar</a></center>
  <?php include 'includes/foot.html' ?>
  <script src="js/menu.js" charset="utf-8"></script>
</body>
</html>
