<?php
include 'includes/header.html';
?>
<style media="screen">
    .label{
        color:#fff;
    }
</style>
<body class="body-pregunta">
    <div class="form form-group" id="formd">
      <div class="container">
        <?php if ( ! empty( $_SESSION['contact_message'] ) ) :
          echo $_SESSION['contact_message'];
          unset( $_SESSION['contact_message'] );
        endif; ?>
        <form action="process-contact2.php" class="form-group" method="POST">
          <label for="" class="label">NOMBRE</label>
          <input type="text" name="name" class="form-control input">
          <br>
          <label for="" class="label">EMAIL</label>
          <input type="email" name="email" class="form-control input">
          <br>
          <label for="" class="label">ASUNTO</label>
          <input type="text" name="subject" class="form-control input">
          <br>
          <label for="" class="label">MENSAJE</label>
          <textarea name="message" class="form-control input"></textarea>
          <br>
          <center><button type="submit" class="btn btn-lg btn-confirmar"><p class="con">ENVIAR</p></button></center>
        </form>
      </div>

    </div>
</body>
<?php include 'includes/foot.html' ?>
