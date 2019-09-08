<?php
  require 'config/config.php';
  $objPregunta = new Pregunta();
  $pregunta = $objPregunta->verPreguntaPorId();
  include 'includes/header.html'; ?>
<style media="screen">
    .label{
        color:#fff;
    }
</style>
<body class="body-pregunta">
    <div class="form form-group" id="formd">
      <div class="container">
        <form action="reportarPregunta.php" class="form-group" method="POST">
          <p class="label text-center">Pregunta a reportar: <?php echo $pregunta['pregunta']; ?></p><br>
          <input type="hidden" name="idpregunta" value="<?php echo $pregunta['idpregunta']; ?>">
          <input type="hidden" name="pregunta" value="<?php echo $pregunta['pregunta']; ?>">
          <input type="text" name="name" placeholder="Nombre" class="form-control input">
          <br>
          <input type="text" name="apellido" placeholder="Apellido" class="form-control input">
          <br>
          <input type="email" class="form-control input" name="email" placeholder="email">
          <br>
          <textarea name="message" class="form-control input" placeholder="Ingrese su mensaje"></textarea>
          <br>
          <center><button type="submit" class="btn btn-lg btn-confirmar"><p class="con">ENVIAR</p></button></center>
        </form>
      </div>

    </div>
</body>
<?php include 'includes/foot.html' ?>
