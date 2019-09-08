<?php
  $nombre = $_POST['name'];
  $email = $_POST['email'];
  $asunto = $_POST['subject'];
  $mensaje = $_POST['message'];

  $bool = mail("francobenitez980@gmail.com", $asunto, $mensaje, $email);

  if ($bool) {
    echo "Mensaje Enviado";
  }else {
    echo "Problemas al enviar";
  }
 ?>
