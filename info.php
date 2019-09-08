<?php
  include 'includes/header.html';
  require 'classes/Conexion.php';
  require 'classes/Pregunta.php';
  $objPregunta = new Pregunta();
  $registro = $objPregunta->verPreguntaPorId();
 ?>
   <br><br>
   <div class="pregunta">
     <div class="jumbotron">
       <h3 class="texto_pregunta"><?php echo $registro['pregunta']; ?> </h3>
     </div>
   </div>
   <br><br><br>
   <center>
     <div class="masinfo">
       <p class="text-center text-justify"><?php echo $registro['masInformacion']; ?></p>
     </div>
   </center>
   <script src="js/menu.js" charset="utf-8"></script>
 </body>
 </html>
