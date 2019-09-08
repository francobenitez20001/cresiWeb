<?php
require 'config/config.php';
$objPregunta = new Pregunta();
$reg = $objPregunta->preguntaJuego(); //array on
echo $reg['pregunta'], '<br>';
?>
<pre>
  <?php
  print_r($_SESSION['preguntaRespondida']);
   ?>
</pre>
