<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CrESI</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style type="text/css">
      h2{color: #871645;}
      .categoria{color: #424242}
      .categoria span{color: #3e8cee}
    </style>
  </head>
  <body>
    <?php
      require 'Conexion.php';
      function listarPregunta()
      {
        $link = Conexion::Conectar();
        $sql = "SELECT pregunta,respuestaCorrecta,masInformacion,categoria
                FROM pregunta";
        $stmt = $link->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
      }
      $preguntas = listarPregunta();

      foreach ($preguntas as $pregunta) {?>
        <div class="contenedorPregunta container">
          <small class="categoria">Categoria > <span class="nomCat"><?php echo $pregunta['categoria'] ?></span> </small>
          <h2 class="pregunta"><?php echo $pregunta['pregunta'] ?></h2>
          <div class="row">
            <div class="col-2">
              <h3 class="correcta"><?php echo $pregunta['respuestaCorrecta'] ?></h3>
            </div>
            <div class="col-10">
              <p class="info"><?php echo $pregunta['masInformacion'] ?></p><br>
            </div>
          </div>
        </div>
        <hr>
      <?php } ?>
  </body>
</html>
